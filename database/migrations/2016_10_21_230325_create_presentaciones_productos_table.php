<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePresentacionesProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('presentaciones_productos', function (Blueprint $table) {
            $table
                ->increments('id');
            $table
                ->string('nombre');

            $table
                ->boolean('esta_activo')
                ->default(true);
            //llave a tipo
            $table
                 ->integer('tipo_producto_id')
                 ->unsigned();

            $table
                ->foreign('tipo_producto_id')
                ->references('id')
                    ->on('tipos_productos');


            $table
                ->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('presentaciones_productos');
    }
}
