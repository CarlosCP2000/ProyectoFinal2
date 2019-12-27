<?php

use Illuminate\Database\Seeder;
use App\Administrator;
use App\People;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(AdministratorSeeder::class);
        $this->call(peopleSeeder::class);
    }
}
