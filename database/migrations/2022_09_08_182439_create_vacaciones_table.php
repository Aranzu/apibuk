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
        Schema::create('vacaciones', function (Blueprint $table) {
            $table->string('nombre');
            $table->string('apellido');
            $table->string('segundoApellido');
            $table->string('rut');
            $table->string('diasHabiles');
            $table->string('tipo');
            $table->string('inicio');
            $table->string('termino');
            $table->string('estado');
            $table->string('cargo');
            $table->string('division');
            $table->string('departamento');
            $table->string('area');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vacaciones');
    }
};
