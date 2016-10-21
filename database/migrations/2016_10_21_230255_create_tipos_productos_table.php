<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTiposProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipos_productos', function (Blueprint $table) {
            
            $table
                ->increments('id');
            $table
                ->string('nombre');
            //llave a categoria
            $table
                 ->integer('categoria_producto_id')
                 ->unsigned();

            $table
                ->foreign('categoria_producto_id')
                ->references('id')
                    ->on('categorias_productos');



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
        Schema::drop('tipos_productos');
    }
}
