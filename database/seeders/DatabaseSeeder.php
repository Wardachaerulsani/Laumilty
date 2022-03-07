<?php

namespace Database\Seeders;

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
        //$this->call(UserSeeder::class);
        // \App\Models\Member::factory(100)->create();
        \App\Models\Outlet::factory(10)->create();
        \App\Models\Paket::factory(10)->create();
        // \App\Models\Outlet::factory(50)->create();
        // \App\Models\User::factory(50)->create();
    }
}
