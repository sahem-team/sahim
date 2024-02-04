<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations
     */
    public function up(): void
    {
        Schema::create('donation_requests', function (Blueprint $table) {
            $table->id();
            $table->foreignId('charity_id')->constrained('charities')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('donation_id')->constrained('donations')->onDelete('cascade')->onUpdate('cascade');
            $table->string('message')->nullable();
            $table->string('request_status')->default('تم الطلب'); // ['تم الطلب', 'تم التبرع', 'تم التسليم','تم التبرع لجهة أخرى']
            $table->string('donation_status')->default('ينتضر'); // ['لم يتم التبرع له','تم التبرع له','ينتضر']
            $table->boolean('accepted')->default(false);
            $table->string('delivery_code')->nullable();


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('donation_requests');
    }
};
