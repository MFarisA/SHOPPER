<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class DiscountUsage extends Model
{
    protected $fillable = [
        'discount_id',
        'user_id',
        'order_id',
        'original_amount',
        'discount_amount',
        'final_amount',
        'discount_code',
        'applied_items',
        'used_at',
        'ip_address',
        'user_agent',
    ];

    protected $casts = [
        'used_at' => 'datetime',
        'applied_items' => 'array',
        'original_amount' => 'decimal:2',
        'discount_amount' => 'decimal:2',
        'final_amount' => 'decimal:2',
    ];

    // Relationships
    public function discount(): BelongsTo
    {
        return $this->belongsTo(Discount::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function order(): BelongsTo
    {
        return $this->belongsTo(Order::class);
    }

    // Scopes
    public function scopeByUser($query, $userId)
    {
        return $query->where('user_id', $userId);
    }

    public function scopeByDiscount($query, $discountId)
    {
        return $query->where('discount_id', $discountId);
    }

    public function scopeByCode($query, $code)
    {
        return $query->where('discount_code', $code);
    }

    public function scopeRecent($query, $days = 30)
    {
        return $query->where('used_at', '>=', now()->subDays($days));
    }
}
