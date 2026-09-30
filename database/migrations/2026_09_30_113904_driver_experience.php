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
Schema::create('driver_experience', function (Blueprint $table) {
    $table->id();

    $table->foreignId('driver_id')
        ->constrained('drivers')
        ->cascadeOnDelete();

    $table->string('equipment');
    $table->string('equipment_type');

    $table->date('from_date');
    $table->date('to_date')->nullable();

    // Example: 120 or 125.89
    $table->decimal('miles', 10, 2)->nullable();

    // 0 = No, 1 = Yes
    $table->boolean('accidenthistory')->default(false);

    // 0 = No, 1 = Yes
    $table->boolean('convictionhistory')->default(false);

    // yes / no
    $table->enum('licensedeniedstatus', ['yes', 'no'])
        ->default('no');

    // yes / no
    $table->enum('licensesuspendedstatus', ['yes', 'no'])
        ->default('no');

    // Long remarks
    $table->longText('licensedeniedremarks')->nullable();
    $table->longText('licensesuspendedremarks')->nullable();

    $table->timestamps();
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
