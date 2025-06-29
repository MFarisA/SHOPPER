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
        Schema::create('user_shops', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('shop_name');
            $table->string('shop_slug')->unique(); // For SEO-friendly URLs
            $table->string('shop_avatar_brand')->nullable();
            $table->string('shop_banner')->nullable(); // Shop banner image
            $table->string('shop_category')->nullable();
            $table->text('shop_description')->nullable(); // Changed to text for longer descriptions
            $table->string('shop_address')->nullable();
            $table->string('shop_phone')->nullable();
            $table->string('shop_email')->nullable();
            
            // Business Information
            $table->string('business_type')->nullable(); // individual, company, etc.
            $table->string('business_registration_number')->nullable();
            $table->string('tax_id')->nullable();
            
            // Shop Status & Settings
            $table->enum('status', ['pending', 'active', 'suspended', 'closed'])->default('pending');
            $table->boolean('is_verified')->default(false);
            $table->timestamp('verified_at')->nullable();
            $table->boolean('is_featured')->default(false);
            
            // Location & Shipping
            $table->decimal('latitude', 10, 8)->nullable(); // Primary location data
            $table->decimal('longitude', 11, 8)->nullable();
            
            // Cached address data from API (for performance & offline access)
            $table->string('city')->nullable(); // Cached from API
            $table->string('state')->nullable(); // Cached from API  
            $table->string('postal_code')->nullable(); // Cached from API
            $table->string('country')->default('Indonesia'); // Cached from API
            $table->text('formatted_address')->nullable(); // Full address from API
            $table->timestamp('address_updated_at')->nullable(); // When address was last fetched
            
            // Shop Settings
            $table->json('shipping_methods')->nullable(); // Store available shipping options
            $table->json('payment_methods')->nullable(); // Store accepted payment methods
            $table->time('opening_time')->nullable();
            $table->time('closing_time')->nullable();
            $table->json('working_days')->nullable(); // Store array of working days
            
            // Performance Metrics (you might want separate tables for these)
            $table->decimal('rating', 3, 2)->default(0.00); // Average rating
            $table->integer('total_reviews')->default(0);
            $table->integer('total_sales')->default(0);
            $table->integer('total_products')->default(0);
            
            // Social Media Links
            $table->string('website')->nullable();
            $table->string('facebook')->nullable();
            $table->string('instagram')->nullable();
            $table->string('twitter')->nullable();
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_shops');
    }
};
