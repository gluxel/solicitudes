<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registros', function (Blueprint $table) {
            $table->id();
            $table->string('alcaldia_uniq');
            $table->integer('cedula');
            $table->string('denun');
            $table->integer('telefono');
            $table->integer('cod_estado');
            $table->integer('cod_municipio');
            $table->integer('cod_parroquia');
            $table->text('descrip');
            $table->integer('cod_categ');
            $table->integer('cod_subcateg');
            $table->integer('cod_extcateg')->nullable;
            $table->integer('cod_estatus');
            $table->string('responsable');
            $table->date('fecha_gen')->nullable;
            $table->date('fecha_est')->nullable;
            $table->boolean('verificacion');
            $table->integer('cod_resp');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('registros');
    }
}
