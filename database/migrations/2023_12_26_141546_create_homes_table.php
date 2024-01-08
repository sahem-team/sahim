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
        Schema::create('homes', function (Blueprint $table) {
            $table->id();
            $table->string('page');
            $table->text('main_title')->nullable();
            $table->text('sub_title')->nullable();
            $table->text('our_role')->nullable();
            $table->text('step_1_title')->nullable();
            $table->text('step_1_description')->nullable();
            $table->text('step_2_title')->nullable();
            $table->text('step_2_description')->nullable();
            $table->text('step_3_title')->nullable();
            $table->text('step_3_description')->nullable();
            $table->text('step_4_title')->nullable();
            $table->text('step_4_description')->nullable();
            $table->string('contact_us_location')->nullable();
            $table->string('contact_us_email')->nullable();
            $table->string('contact_us_phone')->nullable();
            $table->text('about_us_body')->nullable();
            $table->text('about_Q_1')->nullable();
            $table->text('about_A_1')->nullable();
            $table->text('about_Q_2')->nullable();
            $table->text('about_A_2')->nullable();
            $table->text('about_Q_3')->nullable();
            $table->text('about_A_3')->nullable();
            $table->text('about_Q_4')->nullable();
            $table->text('about_A_4')->nullable();
            $table->text('about_Q_5')->nullable();
            $table->text('about_A_5')->nullable();
            $table->text('about_Q_6')->nullable();
            $table->text('about_A_6')->nullable();
            $table->text('about_Q_7')->nullable();
            $table->text('about_A_7')->nullable();
            $table->text('about_Q_8')->nullable();
            $table->text('about_A_8')->nullable();
            $table->text('about_Q_9')->nullable();
            $table->text('about_A_9')->nullable();
            $table->text('about_Q_10')->nullable();
            $table->text('about_A_10')->nullable();
            $table->string('page_image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('homes');
    }
};
