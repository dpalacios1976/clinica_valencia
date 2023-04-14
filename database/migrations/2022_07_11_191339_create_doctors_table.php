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
        Schema::create('doctors', function (Blueprint $table) {
            $table->id();
            $table->string('ruc', 13);
            $table->string('names', 150);
            $table->string('address', 150);
            $table->string('senecyt_code', 30);
            $table->string('mobile', 12);
            $table->string('mobile2', 12);
            $table->string('email', 100);
            $table->integer('consultation_time');
            $table->string('logo', 150)->nullable();
            $table->integer('state')->default(1);
            $table->foreignId('user_id')->nullable()
                ->constrained('users');
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
        Schema::dropIfExists('doctors');
    }
};
