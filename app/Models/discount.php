<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Carbon\Carbon;

class Discount extends Model
{
    protected $fillable = [
        'name',
        'code',
        'description',
        'type',
        'value',
        'minimum_order_amount',
        'maximum_discount_amount',
        'usage_limit',
        'usage_limit_per_user',
        'used_count',
        'starts_at',
        'expires_at',
        'scope',
        'shop_id',
        'applicable_categories',
        'applicable_products',
        'excluded_categories',
        'excluded_products',
        'user_eligibility',
        'eligible_user_ids',
        'first_order_only',
        'is_active',
        'is_featured',
        'auto_apply',
        'stackable',
        'buy_quantity',
        'get_quantity',
        'get_discount_percentage',
        'campaign_name',
        'usage_analytics',
        'created_by',
        'status_reason',
    ];

    protected $casts = [
        'starts_at' => 'datetime',
        'expires_at' => 'datetime',
        'applicable_categories' => 'array',
        'applicable_products' => 'array',
        'excluded_categories' => 'array',
        'excluded_products' => 'array',
        'eligible_user_ids' => 'array',
        'usage_analytics' => 'array',
        'first_order_only' => 'boolean',
        'is_active' => 'boolean',
        'is_featured' => 'boolean',
        'auto_apply' => 'boolean',
        'stackable' => 'boolean',
        'value' => 'decimal:2',
        'minimum_order_amount' => 'decimal:2',
        'maximum_discount_amount' => 'decimal:2',
        'get_discount_percentage' => 'decimal:2',
    ];

    // Relationships
    public function shop(): BelongsTo
    {
        return $this->belongsTo(UserShop::class, 'shop_id');
    }

    public function createdBy(): BelongsTo
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function usages(): HasMany
    {
        return $this->hasMany(DiscountUsage::class);
    }

    // Scopes
    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    public function scopeValid($query)
    {
        $now = Carbon::now();
        return $query->where('starts_at', '<=', $now)
                    ->where(function($q) use ($now) {
                        $q->whereNull('expires_at')
                          ->orWhere('expires_at', '>=', $now);
                    });
    }

    public function scopeByCode($query, $code)
    {
        return $query->where('code', $code);
    }

    public function scopeGlobal($query)
    {
        return $query->where('scope', 'global');
    }

    public function scopeForShop($query, $shopId)
    {
        return $query->where('scope', 'shop')->where('shop_id', $shopId);
    }

    // Helper methods
    public function isValid(): bool
    {
        $now = Carbon::now();
        
        if (!$this->is_active) {
            return false;
        }
        
        if ($this->starts_at > $now) {
            return false;
        }
        
        if ($this->expires_at && $this->expires_at < $now) {
            return false;
        }
        
        if ($this->usage_limit && $this->used_count >= $this->usage_limit) {
            return false;
        }
        
        return true;
    }

    public function canBeUsedByUser(User $user): bool
    {
        if (!$this->isValid()) {
            return false;
        }

        // Check user eligibility
        if ($this->user_eligibility === 'new_users' && $user->orders()->exists()) {
            return false;
        }

        if ($this->user_eligibility === 'specific_users' && 
            !in_array($user->id, $this->eligible_user_ids ?? [])) {
            return false;
        }

        // Check per-user usage limit
        if ($this->usage_limit_per_user) {
            $userUsageCount = $this->usages()->where('user_id', $user->id)->count();
            if ($userUsageCount >= $this->usage_limit_per_user) {
                return false;
            }
        }

        // Check first order only
        if ($this->first_order_only && $user->orders()->exists()) {
            return false;
        }

        return true;
    }

    public function calculateDiscount(float $orderAmount): float
    {
        if ($orderAmount < ($this->minimum_order_amount ?? 0)) {
            return 0;
        }

        $discount = 0;

        switch ($this->type) {
            case 'percentage':
                $discount = ($orderAmount * $this->value) / 100;
                if ($this->maximum_discount_amount) {
                    $discount = min($discount, $this->maximum_discount_amount);
                }
                break;
            
            case 'fixed_amount':
                $discount = min($this->value, $orderAmount);
                break;
            
            case 'free_shipping':
                // This would be handled in shipping calculation
                $discount = 0;
                break;
        }

        return round($discount, 2);
    }
}
