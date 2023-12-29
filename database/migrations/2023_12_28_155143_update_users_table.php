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
        Schema::table('users', function (Blueprint $table) {
            // $table->string('donor_type')->nullable();
            // $table->string('user_name')->nullable();
            // $table->string('user_image')->nullable();
            // $table->string('user_location')->nullable();
            // $table->string('user_contact_email')->nullable();
            // $table->string('user_contact_phone')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            // $table->dropColumn('donor_type');
            // $table->dropColumn('user_name');
            // $table->dropColumn('user_image');
            // $table->dropColumn('user_location');
            // $table->dropColumn('user_contact_email');
            // $table->dropColumn('user_contact_phone');

        });
    }
};
