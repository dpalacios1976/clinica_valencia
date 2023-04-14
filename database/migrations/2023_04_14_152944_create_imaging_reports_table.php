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
        Schema::create('imaging_reports', function (Blueprint $table) {
            $table->id();
            $table->text('observation')->comment('Observación de informe de imagenología');
            $table->foreignId('users_is')->constrained('users')->comment('Usurario que registra el informe');
            $table->foreignId('msp_forms_id')->constrained('msp_forms')->comment('Formulario MSP');
            $table->foreignId('orders_images_id')->constrained('orders_images')->comment('Formulario MSP');
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
        Schema::dropIfExists('imaging_reports');
    }
};
