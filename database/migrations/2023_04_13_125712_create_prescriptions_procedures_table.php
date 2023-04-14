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
        Schema::create('prescriptions_procedures', function (Blueprint $table) {
            $table->id();
            $table->foreignId('prescriptions_id')->constrained('prescriptions')->comment('Prescripción Médica');
            $table->foreignId('tariff_details_id')->constrained('tariff_details')->comment('Tarifario');
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
        Schema::dropIfExists('prescriptions_procedures');
    }
};
