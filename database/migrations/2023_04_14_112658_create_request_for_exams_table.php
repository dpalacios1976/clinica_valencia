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
        Schema::create('request_for_exams', function (Blueprint $table) {
            $table->id();
            $table->string('service',20)->comment('Servicio');
            $table->string('hall',20)->comment('Sala');
            $table->string('bed',20)->comment('Cama');
            $table->dateTime('deadline')->comment('Fecha de Entrega');
            $table->enum('priority',['U','R','C'])->comment('U Urgente R Rutina C Control');
            $table->dateTime('shooting_date')->comment('Fecha de toma muestras');

            $table->foreignId('doctors_id')->constrained('doctors')->comment('Doctor');
            $table->foreignId('medical_attention_id')->constrained('medical_attention')->comment('Atención Médica');
            $table->foreignId('patients_id')->constrained('patients')->comment('Pacientes');
            $table->foreignId('msp_forms_id')->constrained('msp_forms')->comment('Nombre del Formulario');



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
        Schema::dropIfExists('request_for_exams');
    }
};
