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
        Schema::create('donations', function (Blueprint $table) {
            $table->id();
            $table->string('order_reference')->unique();
            $table->string('donor_name');
            $table->string('donor_email')->nullable();
            $table->string('donor_phone')->nullable();
            $table->decimal('amount', 10, 2);
            $table->string('currency', 3)->default('TZS');
            $table->enum('payment_method', ['ussd', 'card']);
            $table->string('phone_number')->nullable();
            $table->enum('donation_type', ['one_time', 'monthly'])->default('one_time');
            $table->foreignId('campaign_id')->nullable()->constrained()->onDelete('set null');
            $table->string('payment_id')->nullable();
            $table->string('payment_reference')->nullable();
            $table->decimal('collected_amount', 10, 2)->nullable();
            $table->enum('status', ['pending', 'processing', 'pending_payment', 'success', 'settled', 'failed', 'cancelled'])->default('pending');
            $table->text('message')->nullable();
            $table->json('metadata')->nullable();
            $table->timestamps();
            $table->softDeletes();

            // Indexes
            $table->index('order_reference');
            $table->index('status');
            $table->index('payment_method');
            $table->index('donation_type');
            $table->index('created_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('donations');
    }
};
