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
        Schema::create('detail_request_exams', function (Blueprint $table) {
            $table->id();
            $table->boolean('required')->default(FALSE)->comment('Examen solicitado');
            $table->foreignId('exams_id')->constrained('exams')->comment('Examen');
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
        Schema::dropIfExists('detail_request_exams');
    }
};
