<?php

use Illuminate\Database\Seeder;

class TipoProductosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tipo_productos')->insert([

        	//arreglo con los usuarios a insertar
        	[ "id" =>1,"descripcion" => "Café"],
            [ "id" =>2,"descripcion" => "Bebidas"],
            [ "id" =>3,"descripcion" => "Embotellados"],
            [ "id" =>4,"descripcion" => "Tortas"],

        ]);
    }
}
