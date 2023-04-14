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
        Schema::create('diagnostic_imagings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('orders_images_id')->constrained('orders_images')->comment('Orden de la imagen');
            $table->foreignId('msp_forms_id')->constrained('msp_forms')->comment('Formulario MSP');
            $table->foreignId('users_id')->constrained('users')->comment('Usuario que registra el diagnostico');
            $table->foreignId('cies_details_id')->constrained('cies_details')->comment('CIE 10');
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
        Schema::dropIfExists('diagnostic_imagings');
    }
};
