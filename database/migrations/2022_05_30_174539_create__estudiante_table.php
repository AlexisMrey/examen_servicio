<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Validation\Rules\Unique;

class CreateEstudianteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_estudiante', function (Blueprint $table) {
            $table->id();
            $table->string('nombre')->nullable(false);
            $table->integer('codigo')->unique()->nullable(false);
            $table->string('carrera')->nullable(true);
            $table->integer('creditos_est');
            $table->string('correo')->unique()->nullable(true);
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
        Schema::dropIfExists('_estudiante');
    }
}
