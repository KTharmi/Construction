<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class WorkTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $works = [
            [
             'task' => 'Floor painting',
             'description' => '1 square painting double coard',
             'Rate' => '500.00',
            ]

            ];
            foreach($works as $work){
                App\Work::create($work);
            }
    }
}
