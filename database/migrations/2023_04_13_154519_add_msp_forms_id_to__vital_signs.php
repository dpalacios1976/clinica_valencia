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
        Schema::table('vital_signs', function (Blueprint $table) {
            $table->foreignId('msp_forms_id')->constrained('msp_forms')->comment('Formulario MSP');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('vital_signs', function (Blueprint $table) {
            $table->dropColumn('msp_forms_id');
        });
    }
};
