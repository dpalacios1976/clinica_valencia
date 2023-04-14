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
        Schema::create('reasons_consultations', function (Blueprint $table) {
            $table->id();
            $table->text('description')->comment('Motivo de consulta');
            $table->enum('type',['P','S'])->comment('Primera o Subsecuente');
            $table->foreignId('medical_attention_id')->constrained('medical_attention')->comment('Atención Médica');
            $table->foreignId('doctors_id')->constrained('doctors')->comment('Doctor que registra');
            $table->foreignId('patients_id')->constrained('patients')->comment('Paciente');
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
        Schema::dropIfExists('reasons_consultations');
    }
};
