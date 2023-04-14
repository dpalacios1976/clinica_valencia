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
        Schema::create('diagnoses', function (Blueprint $table) {
            $table->id();
            $table->enum('type',['PRE','DEF'])->comment('PRE=>PRESUENTIVO, DEF=>DEFINITIVO');
            $table->foreignId('medical_attention_id')->constrained('medical_attention')->comment('Atención Médica');
            $table->foreignId('patients_id')->constrained('patients')->comment('Pacientes');
            $table->foreignId('doctors_id')->constrained('doctors')->comment('Doctor');
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
        Schema::dropIfExists('diagnoses');
    }
};
