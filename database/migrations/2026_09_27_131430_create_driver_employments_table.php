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
        Schema::create('driver_employments', function (Blueprint $table) {
            $table->id();

            // Driver relation
            $table->foreignId('driver_id')
                ->constrained('drivers')
                ->cascadeOnDelete();

            // Employer information
            $table->string('cname')->nullable();
            $table->string('contactno')->nullable();
            $table->string('email')->nullable();

            // Address
            $table->string('currentstreet')->nullable();
            $table->string('currentcity')->nullable();
            $table->string('currentstate')->nullable();
            $table->string('currentzip')->nullable();

            // Employment details
            $table->string('positionheld')->nullable();
            $table->date('startdate')->nullable();
            $table->date('enddate')->nullable();

            // Leaving / gap information
            $table->text('reasonleaving')->nullable();
            $table->text('employmentgap')->nullable();

            // Questions
            $table->boolean('fmcsr')->nullable();
            $table->boolean('safetysensitive')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('driver_employments');
    }
};
