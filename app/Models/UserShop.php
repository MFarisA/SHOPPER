<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserShop extends Model
{
    protected $fillable = [
        'user_id',
        'shop_name',
        'shop_slug',
        'shop_avatar_brand',
        'shop_banner',
        'shop_category',
        'shop_description',
        'shop_address',
        'shop_phone',
        'shop_email',

        // Business Information
        'business_type',
        'business_registration_number',
        'tax_id',

        // Shop Status & Settings
        'status',
        'is_verified',
        'verified_at',
        'is_featured',

        // Location & Shipping
        'latitude',
        'longitude',
        'city',
        'state',
        'postal_code',
        'country',
        'formatted_address',
        'address_updated_at',

        // Shop Settings
        'shipping_methods',
        'payment_methods',
        'opening_time',
        'closing_time',
        'working_days',

        // Performance Metrics
        'rating',
        'total_reviews',
        'total_sales',
        'total_products',

        // Social Media Links
        'website',
        'facebook',
        'instagram',
        'twitter',
    ];

    protected $casts = [
        'verified_at' => 'datetime',
        'is_verified' => 'boolean',
        'is_featured' => 'boolean',
        'latitude' => 'decimal:8',
        'longitude' => 'decimal:8',
        'shipping_methods' => 'array',
        'payment_methods' => 'array',
        'working_days' => 'array',
        'opening_time' => 'datetime:H:i',
        'closing_time' => 'datetime:H:i',
        'rating' => 'decimal:2',
        'address_updated_at' => 'datetime',
    ];

    // Relationships
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function discounts()
    {
        return $this->hasMany(Discount::class, 'shop_id');
    }

    // Scopes
    public function scopeActive($query)
    {
        return $query->where('status', 'active');
    }

    public function scopeVerified($query)
    {
        return $query->where('is_verified', true);
    }

    public function scopeFeatured($query)
    {
        return $query->where('is_featured', true);
    }

    // Helper methods
    public function isActive(): bool
    {
        return $this->status === 'active';
    }

    public function isVerified(): bool
    {
        return $this->is_verified;
    }

    public function getStatusBadgeAttribute(): string
    {
        $badges = [
            'pending' => 'warning',
            'active' => 'success',
            'suspended' => 'danger',
            'closed' => 'secondary',
        ];

        return $badges[$this->status] ?? 'secondary';
    }
}
