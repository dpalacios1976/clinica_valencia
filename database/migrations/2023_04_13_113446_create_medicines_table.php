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
        Schema::create('medicines', function (Blueprint $table) {
            $table->id();
            $table->string('codunimed',30)->nullable()->comment('Código único de medicamento');
            $table->string('code',30)->nullable()->comment('Código de medicamento');
            $table->string('description',450)->comment('Descripción del medicamento');
            $table->string('shape',450)->nullable()->comment('Forma de medicamento');
            $table->text('concentration')->nullable()->comment('Concentración');
            $table->string('prescription_level',80)->nullable()->comment('Nivel de Prescripción');
            $table->string('via',450)->nullable()->comment('Via');
            $table->string('exclusive_use',450)->nullable()->comment('Uso exclusivo');
            $table->enum('commercial_generic',['C','G'])->comment('Comercial o Generico');
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
        Schema::dropIfExists('medicines');
    }
};
