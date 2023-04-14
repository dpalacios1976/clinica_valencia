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
        Schema::create('cies_details', function (Blueprint $table) {
            $table->id();
            $table->string('code',20)->comment('Código del CIE10');
            $table->text('description')->comment('Descripción del CIE10');
            $table->foreignId('cies_groups_id')->constrained('cies_groups')->comment('Grupo CIE10');
            $table->foreignId('chapters_cies_id')->constrained('chapters_cies')->comment('Capitulos');
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
        Schema::dropIfExists('cies_details');
    }
};
