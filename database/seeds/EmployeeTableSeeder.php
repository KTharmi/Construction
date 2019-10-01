<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class EmployeeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $employees = [
            [
             'EmpName' => 'Pragash',
             'EmpAddress' => 'Vavunikulam',
             'EmpPhoneNo' => 0774540762,
             'UserId' => 1,
            ]

            ];
            foreach($employees as $employee){
                App\Employee::create($employee);
            }

    }
}
