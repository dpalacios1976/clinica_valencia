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
            //
            $table->foreignId('user_id2')->constrained('users')->comment('Usuario que finaliza la atención');
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
            //
            $table->dropColumn('user_id2');
        });
    }
};
