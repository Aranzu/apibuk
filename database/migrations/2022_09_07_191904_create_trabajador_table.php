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
        Schema::create('trabajador', function (Blueprint $table) {
            $table->string('empleado');
            $table->string('empleadoRut');
            $table->string('nombreCompleto');
            $table->string('TrabajoCargo');
            $table->string('TrabajoFamiliaCargo');
            $table->string('departamento');
            $table->string('centroCosto');
            $table->string('lmyPermisos');
            $table->string('vac');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trabajador');
    }
};
