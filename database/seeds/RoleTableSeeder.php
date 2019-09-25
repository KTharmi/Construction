<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            [
             'role_name' => 'owner',
            ],
            [
                'role_name' => 'engineer',
            ],
            [
                'role_name' => 'Construction_Manager',
            ],
            [
                'role_name' => 'supervisor',
            ],
            [
                'role_name' => 'estimator',
            ],
            [
                'role_name' => 'architect',
            ],
            [
                'role_name' => 'construction_expeditor',
            ]
         ];
         foreach($roles as $role){
             App\Role::create($role);
         }
    }
}
