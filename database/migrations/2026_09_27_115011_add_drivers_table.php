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
        Schema::create('drivers', function (Blueprint $table) {

            $table->id();

            // User
            $table->foreignId('user_id')
                ->nullable()
                ->constrained('users')
                ->nullOnDelete();

            // Company User ID
            $table->unsignedBigInteger('company_id')
                ->nullable();

            $table->foreign('company_id')
                ->references('user_id')
                ->on('companies')
                ->nullOnDelete();

            $table->boolean('legalrightsstatus')->nullable();

            // =========================
            // Required
            // =========================

            $table->string('fname');
            $table->string('mname');
            $table->date('activedate');
            $table->date('dob');
            $table->string('phone');
            $table->string('email');
            $table->date('drugnegativedate');
            $table->string('socialsecurity');
            $table->date('pclearinghousedate');
            $table->string('permituscisno');
            $table->date('permitexpdate');
            $table->date('currentcdlissuedate');
            $table->date('currentcdlexpdate');

            // =========================
            // Nullable
            // =========================

            $table->string('lname')->nullable();
            $table->string('appliedfor')->nullable();
            $table->string('driverstatus')->nullable();

            $table->date('terminationdate')->nullable();

            $table->text('reasonleavingortermination')
                ->nullable();

            $table->boolean('legalrightsyes')
                ->nullable();

            $table->boolean('legalrightsno')
                ->nullable();

            $table->string('workauthorization')
                ->nullable();

            // =========================
            // Current Address
            // =========================

            $table->string('currentstreet')->nullable();
            $table->string('currentcity')->nullable();
            $table->string('currentstate')->nullable();
            $table->string('currentzip')->nullable();
            $table->string('currentyear')->nullable();

            // =========================
            // Mailing Address
            // =========================

            $table->string('mailingstreet')->nullable();
            $table->string('mailingcity')->nullable();
            $table->string('mailingstate')->nullable();
            $table->string('mailingzip')->nullable();
            $table->string('mailingyear')->nullable();

            // =========================
            // Previous Address
            // =========================

            $table->string('previousstreet')->nullable();
            $table->string('previouscity')->nullable();
            $table->string('previousstate')->nullable();
            $table->string('previouszip')->nullable();
            $table->string('previousyear')->nullable();

            // =========================
            // Current CDL
            // =========================

            $table->string('currentcdlstate')->nullable();
            $table->string('currentcdllicenseno')->nullable();
            $table->string('currentcdlclass')->nullable();
            $table->string('currentcdlendorsements')->nullable();

            // =========================
            // Old CDL
            // =========================

            $table->string('oldcdlstate')->nullable();
            $table->string('oldcdllicenseno')->nullable();
            $table->string('oldcdlclass')->nullable();
            $table->string('oldcdlendorsements')->nullable();
            $table->date('oldcdlissuedate')->nullable();
            $table->date('oldcdlexpdate')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('drivers');
    }
};