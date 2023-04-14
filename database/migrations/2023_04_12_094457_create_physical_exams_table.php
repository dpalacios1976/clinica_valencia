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
        Schema::create('physical_exams', function (Blueprint $table) {
            $table->id();
            $table->text('observation')->comment('Observación del examen');
            $table->foreignId('medical_attention_id')->constrained('medical_attention')->comment('Atención Médica');
            $table->foreignId('patients_id')->constrained('patients')->comment('Pacientes');
            $table->foreignId('doctors_id')->constrained('doctors')->comment('Doctor');
            $table->foreignId('detail_physical_exams_id')->constrained('detail_physical_exams')->comment('Examenes Físicos');
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
        Schema::dropIfExists('physical_exams');
    }
};
