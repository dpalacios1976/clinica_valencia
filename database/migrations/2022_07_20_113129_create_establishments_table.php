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
        Schema::create('establishments', function (Blueprint $table) {
            $table->id();
            $table->string('ruc', 13);
            $table->string('razon_social', 180);
            $table->string('nombre_comercial', 180);
            $table->string('direccion', 200);
            $table->string('contribuyente_especial', 20);
            $table->integer('contabilidad');
            $table->integer('ambiente_produccion');
            $table->string('logo', 150)->nullable();
            $table->string('firma_electronica', 150)->nullable();
            $table->string('password', 100)->nullable();
            $table->integer('state')->default(1);
            $table->foreignId('level_id')
                ->constrained();
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
        Schema::dropIfExists('establishments');
    }
};
