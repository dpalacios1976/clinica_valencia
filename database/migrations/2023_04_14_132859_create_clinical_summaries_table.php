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
        Schema::create('clinical_summaries', function (Blueprint $table) {
            $table->id();
            $table->text('observation')->comment('Observación del resumen clínico');
            $table->foreignId('orders_images_id')->constrained('orders_images')->comment('Orden del estudio');
            $table->foreignId('msp_forms_id')->constrained('msp_forms')->comment('Formulario MSP');
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
        Schema::dropIfExists('clinical_summaries');
    }
};
