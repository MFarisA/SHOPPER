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
        Schema::create('discount_usages', function (Blueprint $table) {
            $table->id();
            
            // Core relationships
            $table->foreignId('discount_id')->constrained()->onDelete('cascade');
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->unsignedBigInteger('order_id')->nullable(); // Order where discount was used (no foreign key for now)
            
            // Usage details
            $table->decimal('original_amount', 10, 2); // Order amount before discount
            $table->decimal('discount_amount', 10, 2); // Actual amount discounted
            $table->decimal('final_amount', 10, 2); // Order amount after discount
            
            // Additional tracking
            $table->string('discount_code')->nullable(); // Code used (if any)
            $table->json('applied_items')->nullable(); // Which items the discount was applied to
            $table->timestamp('used_at');
            $table->string('ip_address')->nullable(); // For fraud detection
            $table->string('user_agent')->nullable(); // For analytics
            
            $table->timestamps();
            
            // Indexes for performance
            $table->index(['discount_id', 'used_at']);
            $table->index(['user_id', 'used_at']);
            $table->index(['discount_code', 'used_at']);
            $table->unique(['discount_id', 'user_id', 'order_id']); // Prevent duplicate usage per order
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('discount_usages');
    }
};
