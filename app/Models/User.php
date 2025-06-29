<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
        'phone_number',
        'provider_name',
        'provider_id',
        'avatar'
    ];

    protected $hidden = [
        'password',
        'provider_name',
        'provider_id',
        'remember_token',
    ];

    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public static $authLogin = [
        'email' => 'required|email',
        'password' => 'required|string',
    ];

    public static $authRegister = [
        'name' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:users',
        'password' => 'required|string|min:8|confirmed|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@!]).+$/',
        'phone_number' => 'required|string|max:20',
    ];

    // Relationships
    public function shops(): HasMany
    {
        return $this->hasMany(UserShop::class);
    }

    public function orders(): HasMany
    {
        return $this->hasMany(Order::class);
    }

    public function discountUsages(): HasMany
    {
        return $this->hasMany(DiscountUsage::class);
    }

    public function createdDiscounts(): HasMany
    {
        return $this->hasMany(Discount::class, 'created_by');
    }

    // Helper methods
    public function isNewUser(): bool
    {
        return !$this->orders()->exists();
    }

    public function hasUsedDiscount(Discount $discount): bool
    {
        return $this->discountUsages()
                   ->where('discount_id', $discount->id)
                   ->exists();
    }

    public function getDiscountUsageCount(Discount $discount): int
    {
        return $this->discountUsages()
                   ->where('discount_id', $discount->id)
                   ->count();
    }
}
