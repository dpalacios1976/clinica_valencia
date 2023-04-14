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
        Schema::create('features_requests', function (Blueprint $table) {
            $table->id();
            $table->integer('bed_number')->comment('Número de cama');
            $table->integer('room_number')->comment('Número de sala');
            $table->enum('urgent',['S','N'])->comment('Urgente Si o No');
            $table->text('reason')->comment('Motivo');
            $table->foreignId('medical_attention_id')->constrained('medical_attention')->comment('Atención Médica');
            $table->foreignId('patients_id')->constrained('patients')->comment('Pacientes');
            $table->foreignId('doctors_id')->constrained('doctors')->comment('Doctor');
            $table->foreignId('type_medical_cares_id')->constrained('type_medical_cares')->comment('Tipo de Atención');
            $table->foreignId('specialties_id')->constrained('specialties')->comment('Especialidad');
            $table->foreignId('specialties_id1')->constrained('specialties')->comment('Especialidad Consultada');
            
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
        Schema::dropIfExists('features_requests');
    }
};
