<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTipoNominaToFacwebHaberesDevengado extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('facweb_haberes_devengado', function (Blueprint $table) {
            $table->integer('tipo_nomina');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('facweb_haberes_devengado', function (Blueprint $table) {
            //
        });
    }
}
