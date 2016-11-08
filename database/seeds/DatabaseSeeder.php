<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::statement('SET FOREIGN_KEY_CHECKS=0;'); //es por esto que funciona
        Model::unguard();
        //$this->call(UsersTableSeeder::class);
        $this->call(RubroSeeder::class);
        $this->call(LocalidadSeeder::class);
        $this->call(ComercioSeeder::class);

        $this->call(Categoria_ProductoSeeder::class);
        $this->call(Tipo_ProductoSeeder::class);
        $this->call(Presentacion_ProductoSeeder::class);


        Model::reguard();
       DB::statement('SET FOREIGN_KEY_CHECKS=1;');//-->esto        
    
    }
}
