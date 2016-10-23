<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            

            $table
                ->increments('id');
            $table
                ->string('nombre');
            $table
                ->string('descripcion');
           // $table
             //   ->double('precio');
            $table
                ->string('codigo_barra');    
            $table
                ->string('imagen');
            $table
                ->boolean('activo')
                    ->default(true);
             //llave a tipo
            $table
                 ->integer('presentacion_producto_id')
                 ->unsigned();

            $table
                ->foreign('presentacion_producto_id')
                ->references('id')
                    ->on('presentaciones_productos');

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
        Schema::drop('productos');
    }
}
