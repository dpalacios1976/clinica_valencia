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
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->string('identificacion', 10)->unique();
            $table->string('apellido_paterno', 40);
            $table->string('apellido_materno', 40)->nullable();
            $table->string('primer_nombre', 40);
            $table->string('segundo_nombre', 40)->nullable();
            $table->string('nombres', 160);
            $table->string('foto', 200)->nullable();
            $table->string('direccion', 200);
            $table->string('referencia_domicilio', 200);
            $table->string('sexo', 10);
            $table->string('telefono', 20)->nullable();
            $table->string('telefono2', 20)->nullable();
            $table->string('celular', 12);
            $table->string('mail', 80);
            $table->foreignId('type_identification_id')
                ->constrained('type_identifications');
            $table->foreignId('marital_status_id')->nullable()
                ->constrained('marital_statuses');
            $table->foreignId('nationality_id')
                ->constrained('nationalities');
            $table->string('lugar_nacimiento', 150);
            $table->date('fecha_nacimiento');
            $table->foreignId('country_id')
                ->constrained('countries');
            $table->foreignId('province_id')
                ->constrained('provinces');
            $table->foreignId('city_id')
                ->constrained('cities');
            $table->foreignId('parish_id')
                ->constrained('parishes');
            $table->foreignId('ethnicity_id')->nullable()
                ->constrained('ethnicities');
            $table->foreignId('identity_gender_id')->nullable()
                ->constrained('identity_genders');
            $table->foreignId('education_formal_id')->nullable()
                ->constrained('education_formals');
            $table->foreignId('insurance_id')->nullable()
                ->constrained('insurances');
            $table->foreignId('type_blood_id')->nullable()
                ->constrained('type_bloods');
            $table->foreignId('type_disability_id')->nullable()
                ->constrained('type_disabilities');
            $table->integer('porcentaje_discapacidad')->nullable();
            $table->string('llamar_a', 200)->nullable();
            $table->string('telefono_contacto', 12)->nullable();
            $table->string('direccion_contacto', 150)->nullable();
            $table->integer('state')->default(1);
            $table->integer('created_by')->comment('Usuario que registra el paciente.');
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
        Schema::dropIfExists('patients');
    }
};
