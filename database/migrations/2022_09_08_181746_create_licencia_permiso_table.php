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
        Schema::create('licencia_permiso', function (Blueprint $table) {
            $table->id();
            $table->string('empleado');
            $table->string('rut');
            $table->string('empNombreCompleto');
            $table->string('asistenciaTipo');
            $table->string('asistenciaNombreTipo');
            $table->string('asistenciaFechaInicio');
            $table->string('asistenciaFechaTermino');
            $table->string('asistenciaDias');
            $table->string('tomados');            
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
        Schema::dropIfExists('licencia_permiso');
    }
};
