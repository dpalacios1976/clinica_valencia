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
        Schema::create('tariff_details', function (Blueprint $table) {
            $table->id();
            $table->string('type_of_service',20)->comment('Tipo de Servicio');
            $table->string('code',20)->comment('Código del Tarifario');
            $table->text('description')->comment('Descripción del Tarifario');
            $table->boolean('controls_prices')->default(false)->comment('NO CONTROLA PRECIOS');
            $table->boolean('external_consultation')->default(false)->comment('APLICA AL SERVICIO DE CONSULTA EXTERNA'); 
            $table->boolean('hospitalization')->default(false)->comment('APLICA AL SERVICIO DE HOSPITALIZACION'); 
            $table->boolean('emergency')->default(false)->comment('APLICA AL SERVICIO DE EMERGENCIAS');
            $table->boolean('geographic_two_percent')->default(false)->comment('APLICA MODIFICADOR GEOGRAFICO DEL 2%');
            $table->boolean('high_level_complexity_five_percent')->default(false)->comment('APLICA PROCEDIMIENTO DE ALTO NIVEL DE COMPLEJIDAD 5%');
            $table->boolean('anesthesia_time')->default(false)->nullable()->comment('NO APLICA TIEMPO ANESTESIA');
            $table->decimal('first_level_surgery_value_one',10,2)->nullable()->comment('CIRUGIA PRIMER NIVEL VALOR UNO');
            $table->decimal('first_level_surgery_value_two',10,2)->nullable()->comment('CIRUGIA PRIMER NIVEL VALOR DOS');
            $table->decimal('first_level_surgery_value_three',10,2)->nullable()->comment('CIRUGIA PRIMER NIVEL VALOR TRES');
            $table->decimal('second_level_surgery_value_one',10,2)->nullable()->comment('CIRUGIA SEGUNDO NIVEL VALOR UNO');
            $table->decimal('second_level_surgery_value_two',10,2)->nullable()->comment('CIRUGIA SEGUNDO NIVEL VALOR DOS');
            $table->decimal('second_level_surgery_value_three',10,2)->nullable()->comment('CIRUGIA SEGUNDO NIVEL VALOR TRES');
            $table->decimal('third_level_surgery_value_one',10,2)->nullable()->comment('CIRUGIA TERCER NIVEL VALOR UNO');
            $table->decimal('third_level_surgery_value_two',10,2)->nullable()->comment('CIRUGIA TERCER NIVEL VALOR DOS');
            $table->decimal('third_level_surgery_value_three',10,2)->nullable()->comment('CIRUGIA TERCER NIVEL VALOR TRES');
            $table->decimal('first_level_anesthesia_value_one',10,2)->nullable()->comment('ANESTESIA PRIMER NIVEL VALOR UNO');
            $table->decimal('first_level_anesthesia_value_two',10,2)->nullable()->comment('ANESTESIA PRIMER NIVEL VALOR DOS');
            $table->decimal('first_level_anesthesia_value_three',10,2)->nullable()->comment('ANESTESIA PRIMER NIVEL VALOR TRES');
            $table->decimal('second_level_anesthesia_value_one',10,2)->nullable()->comment('ANESTESIA SEGUNDO NIVEL VALOR UNO');
            $table->decimal('second_level_anesthesia_value_two',10,2)->nullable()->comment('ANESTESIA SEGUNDO NIVEL VALOR DOS');
            $table->decimal('second_level_anesthesia_value_three',10,2)->nullable()->comment('ANESTESIA SEGUNDO NIVEL VALOR TRES');
            $table->decimal('third_level_anesthesia_value_one',10,2)->nullable()->comment('ANESTESIA TERCER NIVEL VALOR UNO');
            $table->decimal('third_level_anesthesia_value_two',10,2)->nullable()->comment('ANESTESIA TERCER NIVEL VALOR DOS');
            $table->decimal('third_level_anesthesia_value_three',10,2)->nullable()->comment('ANESTESIA TERCER NIVEL VALOR TRES');
            $table->foreignId('tariffs_id')->constrained('tariffs')->comment('Tarifario');
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
        Schema::dropIfExists('tariff_details');
    }
};
