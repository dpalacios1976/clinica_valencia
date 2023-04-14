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
        Schema::create('parameterization_test_results', function (Blueprint $table) {
            $table->id();
            $table->string('description',250)->comment('Descipción del resultado');
            $table->string('unit_of_measure',20)->nullable()->comment('Unidad de medida Ej: %,g/dl, seg');
            $table->foreignId('exam_groups_id')->constrained('exam_groups')->comment('Grupo de examenes');
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
        Schema::dropIfExists('parameterization_test_results');
    }
};
