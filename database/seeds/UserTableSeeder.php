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
             'username' => 'Pragash',
             'email' => 'Pragash@gmail.com',
             'password' => Hash::make('123456'),
             'is_active' => 'Yes',
            ],
            [
                'username' => 'Regatheepan',
                'email' => 'Regatheepan@gmail.com',
                'password' => Hash::make('456789'),
                'is_active' => 'Yes',
            ],
            [
                'username' => 'Sarangan',
                'email' => 'Sarangan@gmail.com',
                'password' => Hash::make('abcdef'),
                'is_active' => 'Yes',
            ],
            [
                'username' => 'Anushka',
                'email' => 'Anushka@gmail.com',
                'password' => Hash::make('ghijkl'),
                'is_active' => 'Yes',
            ],
            [
                'username' => 'Hajany',
                'email' => 'Hajany@gmail.com',
                'password' => Hash::make('ghijkl'),
                'is_active' => 'Yes',
            ]
         ];
         foreach($users as $user){
             App\User::create($user);
         }
    }
}
