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
            $table->text('main_title');
            $table->text('sub_title');
            $table->text('our_role');
            $table->text('step_1_title');
            $table->text('step_1_description');
            $table->text('step_2_title');
            $table->text('step_2_description');
            $table->text('step_3_title');
            $table->text('step_3_description');
            $table->text('step_4_title');
            $table->text('step_4_description');
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
