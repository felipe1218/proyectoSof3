<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([

        	//arreglo con los usuarios a insertar
        	[ "id" =>1,"name" => "admin", 'email' => 'admin@lasacacias', 'password'=>'lasacacias_1234', 'tipo_usuario'=>'Administrador'],
            [ "id" =>2,"name" => "ventas", 'email' => 'ventas@lasacacias', 'password'=>'lasacacias_1234', 'tipo_usuario'=>'Vendedor'],

        ]);
    }
}
