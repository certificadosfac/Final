<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFACCERTIFICACARGOSVTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('FAC_CERTIFICA_CARGOS_V', function (Blueprint $table) {
            $table->id();
            $table->string('Grado_Actual',5)->nullable();
            $table->string('Apellidos_Nombres',61)->nullable();
            $table->double('Identificacion',12);
            $table->string('Grado_Cargo',5);
            $table->string('Cargo',80);
            $table->string('Dependencia_Cargo',100);
<<<<<<< HEAD
            $table->string('Email',30);
            $table->string('Email_Institucional',30);
            $table->date('Fecha_Inicio');
            $table->date('Fecha_Termino')->nullable();
=======
            $table->date('Fecha_Inicio');
            $table->date('Fecha_Termino')->nullable();
            $table->string('Email',80);
            $table->string('Email_Institucional',80);
>>>>>>> crud

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('FAC_CERTIFICA_CARGOS_V');
    }
}
