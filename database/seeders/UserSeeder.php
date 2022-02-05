<?php

namespace Database\Seeders;

use App\Models\User;
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
        //
         User::truncate();
         $users = [
             ['name'=> 'Srijan Lama', 'email'=> 'srijannepal80@gmail.com' ,'password'=> bcrypt('password')],
             ['name'=> 'Pramod Yadav', 'email'=> 'pramodyadav@gmail.com' ,'password'=> bcrypt('password')],
         ];
         User::insert($users);
    }
}
