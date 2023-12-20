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
            $table->foreignId('user_id')->constrained('users');
            $table->string('donation_name');
            $table->text('description');
            $table->string('image_url')->nullable();
            $table->enum('quantity_type', ['bag', 'box', 'item', 'unit', 'plate', 'package', 'bottle', 'liter', 'kilogram', 'gram', 'milliliter']);
            $table->integer('quantity');
            $table->date('expiration_date');
            $table->enum('status', ['listed', 'donated', 'delivered', 'rejected'])->default('listed');
            $table->string('donation_type'); // 'store' or 'restaurant'
            $table->unsignedBigInteger('donator_id');
            $table->unsignedBigInteger('recipient_charity_id')->nullable();
            $table->timestamps();
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
