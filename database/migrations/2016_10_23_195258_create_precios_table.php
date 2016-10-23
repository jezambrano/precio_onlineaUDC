<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePreciosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('precios', function (Blueprint $table) {
            
            $table
                ->increments('id');
            
            $table
                ->double('valor');
            
            $table
                ->date('fecha');



             $table
                 ->integer('comercio_id')
                 ->unsigned();

            $table
                ->foreign('comercio_id')
                ->references('id')
                    ->on('comercios');




            $table
                 ->integer('producto_id')
                 ->unsigned();

            $table
                ->foreign('producto_id')
                ->references('id')
                    ->on('productos');



/*
             $table
                 ->integer('usuario_id')
                 ->unsigned();

            $table
                ->foreign('usuario_id')
                ->references('id')
                    ->on('usuarios');
*/


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
        Schema::drop('precios');
    }
}




