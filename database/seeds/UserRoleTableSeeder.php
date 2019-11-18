<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserRoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user_roles = [
            [
             `user_id` => '1',
             `role_id` => '1',
            ],
        ];
            foreach($user_roles as $user_role){
                App\Project::create($user_role);
            }
    }
}
