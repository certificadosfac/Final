<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFACWEBPERSONALVTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        schema::create('facweb_personal_v', function (blueprint $table) {
            $table->id();
            $table->string('ubicacion_departamento',50)->nullable();
            $table->integer('consecutivo');
            $table->integer('unde_fuerza');
            $table->integer('unde_consecutivo');
            $table->string('codigo_militar')->nullable();
            $table->integer('cedula');
            $table->integer('identificacion');
            $table->string('nombres',30)->nullable();
            $table->string('apellidos',30);
            $table->integer('sila_id_situac_labor');
            $table->date('fecha_ult_trasl')->nullable();
            $table->date('fecha_ult_retiro')->nullable();
            $table->char('sexo', 2);
            $table->integer('grad_numerico');
            $table->integer('ubicacion_escalafon')->nullable();
            $table->string('grad_alfabetico',5);
            $table->integer('unde_consecutivo_laborando')->nullable();
            $table->string('unla_descripcion',100);
            $table->string('arcu_sigla',3);
            $table->string('espe_abreviatura',10)->nullable();
            $table->char('activo',2);
            $table->string('sila_descripcion',60)->nullable();
            $table->integer('placa')->nullable();
            $table->text('nomina',40000)->nullable();
            $table->date('fecha-alta_prioridad')->nullable();
            $table->string('ubicacion_ciudad',50)->nullable();            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('FACWEB_PERSONAL_V');
    }
}
