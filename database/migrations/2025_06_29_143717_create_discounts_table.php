<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('discounts', function (Blueprint $table) {
            $table->id();
            
            // Basic Discount Info
            $table->string('name'); // Display name for the discount
            $table->string('code')->nullable()->unique(); // Coupon/promo code (nullable for automatic discounts)
            $table->text('description')->nullable();
            
            // Discount Type & Value
            $table->enum('type', ['percentage', 'fixed_amount', 'free_shipping', 'buy_x_get_y'])->default('percentage');
            $table->decimal('value', 10, 2); // Percentage (0-100) or fixed amount
            $table->decimal('minimum_order_amount', 10, 2)->nullable(); // Minimum order to qualify
            $table->decimal('maximum_discount_amount', 10, 2)->nullable(); // Cap for percentage discounts
            
            // Usage Limits
            $table->integer('usage_limit')->nullable(); // Total uses allowed (null = unlimited)
            $table->integer('usage_limit_per_user')->nullable(); // Per user limit
            $table->integer('used_count')->default(0); // Track total usage
            
            // Validity Period
            $table->timestamp('starts_at');
            $table->timestamp('expires_at')->nullable(); // null = no expiry
            
            // Scope & Targeting
            $table->enum('scope', ['global', 'shop', 'category', 'product'])->default('global');
            $table->foreignId('shop_id')->nullable()->constrained('user_shops')->onDelete('cascade'); // For shop-specific discounts
            $table->json('applicable_categories')->nullable(); // Array of category IDs
            $table->json('applicable_products')->nullable(); // Array of product IDs
            $table->json('excluded_categories')->nullable(); // Categories to exclude
            $table->json('excluded_products')->nullable(); // Products to exclude
            
            // User Targeting
            $table->enum('user_eligibility', ['all', 'new_users', 'existing_users', 'specific_users'])->default('all');
            $table->json('eligible_user_ids')->nullable(); // For specific users
            $table->boolean('first_order_only')->default(false); // Only for user's first order
            
            // Status & Features
            $table->boolean('is_active')->default(true);
            $table->boolean('is_featured')->default(false); // Show prominently
            $table->boolean('auto_apply')->default(false); // Apply automatically without code
            $table->boolean('stackable')->default(false); // Can combine with other discounts
            
            // Buy X Get Y specific fields (for BOGO offers)
            $table->integer('buy_quantity')->nullable(); // Buy X items
            $table->integer('get_quantity')->nullable(); // Get Y items
            $table->decimal('get_discount_percentage', 5, 2)->nullable(); // Discount on Y items (0-100)
            
            // Tracking & Analytics
            $table->string('campaign_name')->nullable(); // For marketing campaigns
            $table->json('usage_analytics')->nullable(); // Store usage stats
            
            // Admin fields
            $table->foreignId('created_by')->nullable()->constrained('users'); // Admin who created it
            $table->string('status_reason')->nullable(); // Why discount was deactivated
            
            $table->timestamps();
            
            // Indexes for performance
            $table->index(['code', 'is_active']);
            $table->index(['shop_id', 'is_active']);
            $table->index(['starts_at', 'expires_at']);
            $table->index(['scope', 'is_active']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('discounts');
    }
};
