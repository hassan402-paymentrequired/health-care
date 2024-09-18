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
        Schema::create('user_identification_and_verification_infos', function (Blueprint $table) {
            $table->id();
             $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->string('Identification_type');
            $table->string('Identification_Number');
            $table->string('Scanned_Copy_of_Identification_Document')->nullable();
            $table->boolean('health_condition_consent')->default(0);
            $table->boolean('health_consent')->default(0);
            $table->boolean('policy_consent')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_identification_and_verification_infos');
    }
};
