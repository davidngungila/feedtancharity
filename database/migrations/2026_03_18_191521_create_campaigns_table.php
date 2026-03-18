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
        Schema::create('campaigns', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->text('description');
            $table->decimal('goal_amount', 10, 2);
            $table->decimal('raised_amount', 10, 2)->default(0);
            $table->string('currency', 3)->default('TZS');
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->string('featured_image')->nullable();
            $table->enum('status', ['draft', 'active', 'completed', 'cancelled'])->default('draft');
            $table->string('category')->nullable();
            $table->boolean('featured')->default(false);
            $table->json('metadata')->nullable();
            $table->timestamps();
            $table->softDeletes();

            // Indexes
            $table->index('slug');
            $table->index('status');
            $table->index('category');
            $table->index('featured');
            $table->index('start_date');
            $table->index('end_date');
            $table->index('created_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('campaigns');
    }
};
