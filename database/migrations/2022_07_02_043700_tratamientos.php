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
        //
        Schema::create('tratamientos', function (Blueprint $table) {

            $table->engine="InnoDB";
            $table->bigIncrements('id');

            $table->bigInteger('empleado_id')->unsigned();
            $table->bigInteger('medicamento_id')->unsigned();

            $table->string('Nombre');
            $table->string('Descripcion');
            $table->string('FechaInicio');
            $table->string('FechaFinal');
            $table->string('CitasAgendadas');
            $table->string('CitasAsistidas');
            $table->timestamps();

            $table->foreign('empleado_id')->references('id')->on('empleados');
            $table->foreign('medicamento_id')->references('id')->on('medicamentos')->onDelete("cascade");
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
