<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
class AdministratorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('administrators')->insert([

            'id' => 1,
            'peoples_id' => 76136183,
            'username' => "carlos2000",
            'password' => "1234",
        ]);
    }
}