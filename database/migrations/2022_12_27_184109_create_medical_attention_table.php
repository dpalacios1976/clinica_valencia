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
        Schema::create('medical_attention', function (Blueprint $table) {
            $table->id();
            $table->string('code',40)->nullable()->comment('Código de derivación Seguros IESS,ISSFA,ISSPOL');
            $table->text('reason')->nullable()->comment('Motivo de la Atención Médica');
            $table->timestamp('end_date')->nullable()->comment('Fecha de finalización de la atención médica');
            $table->foreignId('type_medical_care_id')->constrained('type_medical_cares')->comment('Tipo de atención médica');
            $table->foreignId('doctors_id')->constrained('doctors')->comment('Médico que realiza la atención médica');
            $table->foreignId('user_id')->constrained('users')->comment('Usuario que registra');
            $table->foreignId('establishments_id')->constrained('establishments')->comment('Establecimiento');
            $table->foreignId('patients_id')->constrained('patients')->comment('Paciente');
            $table->foreignId('care_status_id')->constrained('care_statuses')->comment('Estado de la atención médica');
            $table->foreignId('specialities_id')->constrained('specialties')->comment('Especialidad');
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
        Schema::dropIfExists('medical_attention');
    }
};
