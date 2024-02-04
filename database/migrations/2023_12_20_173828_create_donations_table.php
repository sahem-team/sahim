<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.#
     */
    public function up(): void
    {
        Schema::create('donations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('donor_id')->constrained('donors')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('charity_id')->nullable()->constrained('charities')->onDelete('cascade')->onUpdate('cascade');
            $table->string('donation_name');
            $table->text('description');
            $table->string('image_url')->nullable();
            $table->string('quantity_type')->default('وحدة');
            $table->integer('quantity');
            $table->string('status')->default('مُدرج');
            $table->date('expiration_date');
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
