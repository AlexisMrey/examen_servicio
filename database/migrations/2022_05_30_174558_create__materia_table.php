<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMateriaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_materia', function (Blueprint $table) {
            $table->id();
            $table->integer('creditos_mat')->nullable(false);
            $table->string('nombre_mat')->nullable(false);
            $table->string('profesor')->nullable(false);
            $table->string('turno')->nullable(false);
            $table->boolean('disponible')->nullable(false);
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
        Schema::dropIfExists('_materia');
    }
}
