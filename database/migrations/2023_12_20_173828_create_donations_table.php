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
            $table->foreignId('donor_id')->constrained('donors');
            $table->foreignId('charity_id')->nullable()->constrained('charities');
            $table->string('donation_name');
            $table->text('description');
            $table->string('image_url')->nullable();
            $table->enum('quantity_type', ['bag', 'box', 'item', 'unit', 'plate', 'package', 'bottle', 'liter', 'kilogram', 'gram', 'milliliter']);
            $table->integer('quantity');
            $table->date('expiration_date');
            $table->enum('status', ['listed', 'donated', 'delivered', 'rejected'])->default('listed');
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
