<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFACWEBHABERESEMBARGOTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('FACWEB_HABERES_EMBARGO', function (Blueprint $table) {
            $table->id();
            $table->integer('identificacion');
            $table->string('codigo_militar',12)->nullable();
            $table->string('nombres_apellidos',61)->nullable();
            $table->double('mes_nomina',2)->nullable();
            $table->double('ano_nomina',4)->nullable();
            $table->string('descripcion',70);
            $table->string('emb_inicio',7)->nullable();
            $table->string('emb_termino',7)->nullable();
            $table->double('emb_valor',14,2)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('FACWEB_HABERES_EMBARGO');
    }
}
