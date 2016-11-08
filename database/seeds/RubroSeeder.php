<?php

use Illuminate\Database\Seeder;

class RubroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('rubros')->truncate();
    	factory('App\Rubro',6)->create();
    }
}
