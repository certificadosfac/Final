<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFACWEBCERTIFICALABORALV1Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('FACWEB_CERTIFICA_LABORAL_V1', function (Blueprint $table) {
            $table->id();
            $table->string('grado',5)->nullable();
            $table->string('apellidos_nombres',61)->nullable();
            $table->double('cedula',12);
            $table->string('lugar_cedula',50);
            $table->string('codigo_militar',12)->nullable();
            $table->string('des_grado',50);
            $table->string('categoria',40);
            $table->string('cargo',80);
            $table->string('unidad_laboral',100);
            $table->string('disposicion',40);
            $table->string('numero_dispo',6);
            $table->string('fecha_disp',11)->nullable();
            $table->string('fecha_alta',11)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('FACWEB_CERTIFICA_LABORAL_V1');
    }
}
