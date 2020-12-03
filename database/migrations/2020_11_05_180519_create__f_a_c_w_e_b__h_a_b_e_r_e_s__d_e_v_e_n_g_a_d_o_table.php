<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFACWEBHABERESDEVENGADOTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('FACWEB_HABERES_DEVENGADO', function (Blueprint $table) {
            $table->id();
            $table->string('grado',5)->nullable();
            $table->string('nombres_apellidos',61)->nullable();
            $table->double('cc',12);
            $table->string('codigo_militar',12)->nullable();
            $table->string('unidad_laboral',100);
            $table->string('unidad_pagaduria',100);
            $table->double('ano_nomina',4)->nullable();
            $table->double('mes_nomina',2)->nullable();
            $table->string('abreviatura',15);
            $table->double('porcentaje',6,3)->nullable();
            $table->double('valor_dev',14,2)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('FACWEB_HABERES_DEVENGADO');
    }
}
