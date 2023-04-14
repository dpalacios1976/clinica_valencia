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
        Schema::create('exam_results', function (Blueprint $table) {
            $table->id();
            $table->string('result',350)->comment('Resultado del examen');
            $table->foreignId('detail_request_exams_id')->constrained('detail_request_exams')->comment('Usuario que registra los resultados');
            $table->foreignId('msp_forms_id')->constrained('msp_forms')->comment('Nombre del Formulario');
            $table->foreignId('users_id')->constrained('users')->comment('Usuario que registra los resultados');

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
        Schema::dropIfExists('exam_results');
    }
};
