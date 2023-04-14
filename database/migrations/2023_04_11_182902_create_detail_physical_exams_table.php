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
        Schema::create('detail_physical_exams', function (Blueprint $table) {
            $table->id();
            $table->string('code',5)->comment('Código EXAMENES FISICOS ');
            $table->string('description',200)->comment('Descripción EXAMENES FISICOS');
            $table->integer('state')->default(1);

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
        Schema::dropIfExists('detail_physical_exams');
    }
};
