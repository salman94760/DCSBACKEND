<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('permits', function (Blueprint $table) {
            $table->id();
             $table->unsignedBigInteger('company_id')->nullable();
            $table->string('permitname')->nullable();
            $table->string('jurisdiction')->nullable();
            $table->unsignedBigInteger('assignto')->nullable();
            $table->string('status')->nullable();
            $table->date('expirydate')->nullable();

            $table->decimal('servicefee', 10, 2)->default(0);
            $table->decimal('govfee', 10, 2)->default(0);
            $table->decimal('processingfee', 10, 2)->default(0);
            $table->decimal('discount', 10, 2)->default(0);

            $table->text('docremarks')->nullable();
            $table->text('notes')->nullable();

            $table->foreign('company_id')
        ->references('id')
        ->on('companies')
        ->nullOnDelete();

    $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('permits');
    }
};