<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
             'username' => 'Owner1',
             'email' => 'Owner1@gmail.com',
             'password' => Hash::make('123456'),
             'is_active' => 'Yes',
            ],
            [
                'username' => 'Engineer1',
                'email' => 'Engineer1@gmail.com',
                'password' => Hash::make('456789'),
                'is_active' => 'Yes',
            ],
            [
                'username' => 'CManager1',
                'email' => 'CManager1@gmail.com',
                'password' => Hash::make('abcdef'),
                'is_active' => 'Yes',
            ],
            [
                'username' => 'estimator1',
                'email' => 'estimator1@gmail.com',
                'password' => Hash::make('ghijkl'),
                'is_active' => 'Yes',
            ],
            [
                'username' => 'architect1',
                'email' => 'architect1@gmail.com',
                'password' => Hash::make('ghijkl'),
                'is_active' => 'Yes',
            ]
         ];
         foreach($users as $user){
             App\User::create($user);
         }
    }
}
