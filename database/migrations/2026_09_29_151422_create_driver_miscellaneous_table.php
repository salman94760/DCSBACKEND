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
        Schema::create('driver_miscellaneous', function (Blueprint $table) {
            $table->id();
            $table->foreignId('driver_id')
            ->constrained('drivers')
            ->cascadeOnDelete();
            $table->string('title');
            $table->date('date')->nullable();
            $table->string('file')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('driver_miscellaneous');
    }
};
