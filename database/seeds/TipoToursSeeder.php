<?php

use Illuminate\Database\Seeder;

class TipoToursSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tipo_tours')->insert([

        	//arreglo con los usuarios a insertar
        	[ "id" =>1,"descripcion" => "Directa"],


        ]);
    }
}
