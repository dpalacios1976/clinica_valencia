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
        Schema::create('requested_studies', function (Blueprint $table) {
            $table->id();
            $table->string('description',250)->comment('Descripción del estudio Solicitado');
            $table->string('result',250)->comment('Resultado del estudio');
            $table->dateTime('result_date')->comment('Fecha del Resultado del estudio');
            $table->foreignId('orders_images_id')->constrained('orders_images')->comment('Orden del estudio');
            $table->foreignId('msp_forms_id')->constrained('msp_forms')->comment('Nombre del formulario');
            $table->foreignId('users_id')->constrained('users')->comment('Usuario que registra el resultado del estudio');
            $table->foreignId('images_id')->constrained('images')->comment('Imagen que se solicita el estudio');



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
        Schema::dropIfExists('requested_studies');
    }
};
