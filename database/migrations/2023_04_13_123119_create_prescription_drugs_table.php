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
        Schema::create('prescription_drugs', function (Blueprint $table) {
            $table->id();
            $table->integer('amount')->comment('Cantidad');
            $table->string('indications')->comment('Ej: Dos comprimidos');
            $table->string('frequency')->comment('Ej: Cada 8 horas ');
            $table->string('period')->comment('Ej: durante 3 días');
            $table->foreignId('prescriptions_id')->constrained('prescriptions')->comment('Prescripción Médica');
            $table->foreignId('medicines_id')->constrained('medicines')->comment('Medicamento');
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
        Schema::dropIfExists('prescription_drugs');
    }
};
