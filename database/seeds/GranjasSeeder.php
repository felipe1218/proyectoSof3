<?php

use Illuminate\Database\Seeder;

class GranjasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('granjas')->insert([

        	//arreglo con los usuarios a insertar
        	[ "id" =>1,"name" => "Las Acacias Coffee Farm"]

        ]);
    }
}
