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
        Schema::create('licence', function (Blueprint $table) {
            $table->id();
            $table->string('licence_type_id');
            $table->string('contribution_days');
            $table->string('format');
            $table->string('type');
            $table->date('start_date');
            $table->date('end_date');
            $table->string('days_count');
            $table->string('day_percent');
            $table->string('employee_id');
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
        Schema::dropIfExists('licence');
    }
};
