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
        Schema::table('medical_attention', function (Blueprint $table) {
            $table->unsignedBigInteger('insurances_id')->nullable();
            $table->foreign('insurances_id')->references('id')->on('insurances')->comment('Aseguradora');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('medical_attention', function (Blueprint $table) {
            $table->dropColumn('insurances_id');
        });
    }
};
