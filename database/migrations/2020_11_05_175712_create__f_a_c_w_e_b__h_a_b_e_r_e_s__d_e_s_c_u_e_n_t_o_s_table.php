<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFACWEBHABERESDESCUENTOSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('FACWEB_HABERES_DESCUENTOS', function (Blueprint $table) {
            $table->id();
            $table->integer('identificacion');
            $table->string('nombres_apellidos',61)->nullable();
            $table->string('arb',20);
            $table->string('id_tipo_descuento',6);
            $table->string('desc_ini',81)->nullable();
            $table->string('desc_ter',81)->nullable();
            $table->double('valor_desc',14,2)->nullable();
            $table->double('ano_nomina',4)->nullable();
            $table->double('mes_nomina',2)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('FACWEB_HABERES_DESCUENTOS');
    }
}
