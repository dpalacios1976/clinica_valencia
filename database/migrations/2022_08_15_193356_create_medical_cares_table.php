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
        Schema::create('medical_cares', function (Blueprint $table) {
            $table->id();
            $table->foreignId('type_medical_care_id')
                ->constrained('type_medical_cares');
            $table->foreignId('care_status_id')
                ->constrained('care_statuses');
            $table->foreignId('user_id')
                ->constrained('users');
            $table->foreignId('speciality_id')
                ->constrained('specialties');
            $table->foreignId('establisment_id')
                ->constrained('establishments');
            $table->foreignId('doctor_id')
                ->constrained('doctors');
            $table->timestamp('fecha_finalizacion');
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
        Schema::dropIfExists('medical_cares');
    }
};
