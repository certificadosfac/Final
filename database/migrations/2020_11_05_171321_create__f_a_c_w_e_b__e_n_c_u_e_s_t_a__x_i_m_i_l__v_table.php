<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFACWEBENCUESTAXIMILVTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('FACWEB_ENCUESTA_XIMIL_V', function (Blueprint $table) {
            $table->id();
            $table->integer('cedula');
            $table->string('lugar_expe_cedula',50)->nullable();
            $table->string('fecha_nacimi', 11)->nullable();
            $table->string('lugar_nacimiento', 50)->nullable();
            $table->char('tipo_sangre',2);
            $table->char('factor',2);
            $table->string('categoria',40);
            $table->string('direccion',100)->nullable();
            $table->integer('telefono')->nullable();
            $table->string('email',50)->nullable();
            $table->char('activo',2);
            $table->string('fecha_ult_trasla',11)->nullable();
            $table->string('fecha_alta_propiedad',11)->nullable();
            $table->string('grad_alfabetico',5)->nullable();
            $table->string('fecha_ult_ascenso',11)->nullable();
            $table->string('descripcion_dependencia',100)->nullable();
            $table->string('cargo',80)->nullable();
            $table->string('lugar_procedencia',50)->nullable();
            $table->string('barrio_recidencia',40);
            $table->string('estado_civil',2);


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('FACWEB_ENCUESTA_XIMIL_V');
    }
}
