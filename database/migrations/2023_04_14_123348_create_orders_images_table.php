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
        Schema::create('orders_images', function (Blueprint $table) {
            $table->id();
            $table->string('service',20)->comment('Servicio');
            $table->string('hall',20)->comment('Sala');
            $table->string('bed',20)->comment('Cama');
            $table->dateTime('deadline')->comment('Fecha de Entrega de resultados');
            $table->enum('priorty',['U','R','C'])->comment('U Urgente R Rutina C Contro');
            $table->boolean('can_move')->comment('Puede Movilizarse');
            $table->boolean('can_remove_bandages')->comment('Puede Retirarse Vendas, Yeso');
            $table->boolean('doctor_will_pending_examination')->comment('Médico Presente en el exámen');
            $table->boolean('take_x-ray_bed')->comment('Toma de Radiografía en Cama');

            $table->foreignId('doctors_id')->constrained('doctors')->comment('Doctor');
            $table->foreignId('medical_attention_id')->constrained('medical_attention')->comment('Atención Médica');
            $table->foreignId('patients_id')->constrained('patients')->comment('Pacientes');

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
        Schema::dropIfExists('orders_images');
    }
};
