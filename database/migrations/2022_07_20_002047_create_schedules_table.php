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
        Schema::create('schedules', function (Blueprint $table) {
            $table->id();
            $table->integer('day');
            $table->time('time_from')->nullable();
            $table->time('time_to')->nullable();
            $table->time('morning_from')->nullable();
            $table->time('morning_to')->nullable();
            $table->time('afternoon_from')->nullable();
            $table->time('afternoon_to')->nullable();
            $table->integer('state');
            $table->foreignId('doctor_id')
                ->constrained();
            $table->integer('created_by')->comment('Usuario que registra el horario.');
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
        Schema::dropIfExists('schedules');
    }
};
