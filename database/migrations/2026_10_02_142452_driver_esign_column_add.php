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
        Schema::table('drivers', function (Blueprint $table) {
            $table->longText('esigndata')->nullable();
            $table->string('ip_address')->nullable();
            $table->string('timezone')->nullable();
            $table->dateTime('time_date')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('drivers', function (Blueprint $table) {
            $table->dropColumn([
                'esigndata',
                'ip_address',
                'timezone',
                'us_time_date',
            ]);
        });
    }
};