<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class CreateUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
               'name'=>'User',
               'email'=>'user@cambotutorial.com',
               'roles'=> 0,
               'password'=> bcrypt('123456'),
            ],
            [
               'name'=>'Editor',
               'email'=>'editor@cambotutorial.com',
               'roles'=> 1,
               'password'=> bcrypt('123456'),
            ],
            [
               'name'=>'Admin',
               'email'=>'admin@cambotutorial.com',
               'roles'=> 2,
               'password'=> bcrypt('123456'),
            ],
            
        ];
        foreach ($users as $key => $user) 
        {
            User::create($user);
        }
    }
}
