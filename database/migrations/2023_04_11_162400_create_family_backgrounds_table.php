<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('family_backgrounds', function (Blueprint $table) {
            $table->id();
            $table->text('observation')->comment('Observación');
            $table->foreignId('medical_attention_id')->constrained('medical_attention')->comment('Atención Médica');
            $table->foreignId('clinical_data_id')->constrained('clinical_data')->comment('Datos Clínicos');
            $table->foreignId('patients_id')->constrained('patients')->comment('Pacientes');
            $table->foreignId('doctors_id')->constrained('doctors')->comment('Doctor');
            $table->foreignId('kinship_id')->constrained('kinship')->comment('Parentesco');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('family_backgrounds');
    }
};
