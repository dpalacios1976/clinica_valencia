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
        Schema::create('obstetric_ultrasound_data', function (Blueprint $table) {
            $table->id();
            $table->string('value',10)->comment('Valor datos de geografía');
            $table->string('gestacional_age','10')->comment('Valor de edad gestacional');
            $table->foreignId('orders_images_id')->constrained('orders_images')->comment('Orden de imagen');
            $table->foreignId('msp_forms_id')->constrained('msp_forms')->comment('Formulario MSP');
            $table->foreignId('ultrasound_data_id')->constrained('ultrasound_data')->comment('Datos de ecografía');

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
        Schema::dropIfExists('obstetric_ultrasound_data');
    }
};
