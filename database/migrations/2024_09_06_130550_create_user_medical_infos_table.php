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
        Schema::create('user_medical_infos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->string('care_physician')->nullable();
            $table->text('Family_medical_history')->nullable();
            $table->string('Current_medications')->nullable();
            $table->text('Allergies')->nullable();
            $table->string('Insurance_policy_number')->nullable();
            $table->text('Past_medical_history')->nullable();
            $table->string('Insurance_provider')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_medical_infos');
    }
};
