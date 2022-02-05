<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Database\Seeders\UserSeeder;
use Database\Seeders\StatesSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([StatesSeeder::class]);
        $this->call([UserSeeder::class]);
    }
}
