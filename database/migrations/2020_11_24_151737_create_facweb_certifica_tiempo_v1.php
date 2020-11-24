<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFacwebCertificaTiempoV1 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('FACWEB_CERTIFICA_TIEMPO_V1', function (Blueprint $table) {
            $table->id();            
            $table->double('cedula',12);
            $table->string('codigo_militar',12)->nullable();
            $table->string('nombres_apellidos',61)->nullable();
            $table->string('grado',5)->nullable();
            $table->string('des_grado',50);
            $table->string('categoria',40);
            $table->string('lugar_cedula',50);
            $table->string('unidad_laboral',100);
            $table->text('tipo_tiempo',4000)->nullable();
            $table->char('efecto',2);
            $table->string('tipo_disposicion',10);
            $table->string('numero_disposicion',6);
            $table->string('fecha_disposicion',11)->nullable();
            $table->string('fecha_inicio',11)->nullable();
            $table->string('fecha_termino',11)->nullable();
            $table->string('fuerza_reconoce',120)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('FACWEB_CERTIFICA_TIEMPO_V1');
    }
}
