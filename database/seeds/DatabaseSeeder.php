<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(GranjasSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(TipoProductosSeeder::class);
        $this->call(TipoToursSeeder::class);
    }
}
