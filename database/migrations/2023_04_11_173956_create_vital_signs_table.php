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
        Schema::create('vital_signs', function (Blueprint $table) {
            $table->id();
            $table->integer('value')->comment('Valor del Signo Vital');
            $table->foreignId('medical_attention_id')->constrained('medical_attention')->comment('Atención Médica');
            $table->foreignId('detail_vital_signs_id')->constrained('detail_vital_signs')->comment('Signo Vital');
            $table->foreignId('patients_id')->constrained('patients')->comment('Pacientes');
            $table->foreignId('users_id')->constrained('users')->comment('Enfermero(a) que ingresa los datos de los Signos Vitales');
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
        Schema::dropIfExists('vital_signs');
    }
};
