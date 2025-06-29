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

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
