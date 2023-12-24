<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('donations', function (Blueprint $table) {
            // Change column type to string and set a default value
            $table->string('status')->default('مُدرج')->change(); // ['مُدرج', 'تم التبرع', 'تم التسليم','مرفوض']
            $table->string('quantity_type')->default('وحدة')->change(); // ['عدد', 'باج', 'عنصر', 'وحدة', 'بالطباعة']
        });
    }

    public function down()
    {
        Schema::table('donations', function (Blueprint $table) {
            // Revert the changes if needed
            $table->string('status')->default('listed')->change();
            $table->string('quantity_type')->default('x')->change();;

        });
    }
};
