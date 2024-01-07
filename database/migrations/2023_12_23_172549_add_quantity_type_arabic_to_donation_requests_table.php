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
        Schema::table('donation_requests', function (Blueprint $table) {
            $table->renameColumn('status', 'request_status')
            ->default('تم الطلب'); // ['تم الطلب', 'تم التبرع', 'تم التسليم','تم التبرع لجهة أخرى']
            $table->string('donation_status')->default('ينتضر'); // ['لم يتم التبرع له','تم التبرع له','ينتضر']
        });
    }

    public function down()
    {
        Schema::table('donation_requests', function (Blueprint $table) {
            $table->renameColumn('request_status', 'status');
            $table->dropColumn('donation_status'); // ['لم يتم التبرع له','تم التبرع له','ينتضر']
        });
    }
};
