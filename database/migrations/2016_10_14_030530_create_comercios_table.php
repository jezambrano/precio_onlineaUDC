<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComerciosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comercios', function (Blueprint $table) {
            $table
                ->increments('id');
            $table
                ->string('nombre', 60);
            $table
                ->integer('rubro_id')
                ->unsigned();
            $table
                ->integer('localidad_id')
                 ->unsigned();
            $table
                ->string('direccion_calle');
            $table
                ->boolean('direccion_esquina');
            $table
                ->integer('direccion_numero');
            $table
                ->string('telefono');
            $table
                ->string('horario');//ver

            $table
                ->foreign('rubro_id')
                ->references('id')
                    ->on('rubros');
            $table
                ->foreign('localidad_id')
                ->references('id')
                    ->on('localidades');
	    $table  
		->boolean('activo')->default(true);

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
        Schema::drop('comercios');
    }
}
