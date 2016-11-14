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
        Schema::create('precios_verificados', function (Blueprint $table){

       $table
            ->increments('id');

        $table
            ->integer('usuario_id')
             ->unsigned();  

        $table
                ->foreign('usuario_id')
                ->references('id')
                    ->on('users');

        $table
            ->date('fecha_registro');

        $table
            ->integer('precio_id')
             ->unsigned();

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
