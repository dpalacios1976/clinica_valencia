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
        Schema::create('organs_systems', function (Blueprint $table) {
            $table->id();
            $table->string('code',10)->comment('Código de Organos y Sistemas');
            $table->string('description',200)->comment('Descripción de Organos y Sistemas');
            $table->integer('status')->default(1);
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
        Schema::dropIfExists('organs_systems');
    }
};
