<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePreciosVerificadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table){

       $table
            ->increments('id');

        $table
            ->integer('usuario');    

        $table
                ->foreign('usuario')
                ->references('id')
                    ->on('users');

        $table
            ->time('fecha_registro');

        $table
            ->integer('precio_id');

        $table
                ->foreign('precio_id')
                ->references('id')
                    ->on('precios'); 



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
        Schema::drop('precios_verificados');
    }
}
