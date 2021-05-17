<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UtenteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        user::factory(10)->create();
    }
}
