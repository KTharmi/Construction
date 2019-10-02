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
            ],
            [
                'EmpName' => 'Hajani',
                'EmpAddress' => 'Vavunikulam',
                'EmpPhoneNo' => 0774540762,
                'UserId' => 4,
            ],
            [
                'EmpName' => 'Regadepan',
                'EmpAddress' => 'Jaffna',
                'EmpPhoneNo' => 0212226451 ,
                'UserId' => 2,
            ],
            [
                'EmpName' => 'Sarangan',
                'EmpAddress' => 'Puliyankulam',
                'EmpPhoneNo' => 0212222134,
                'UserId' => 5 ,
            ]

            ];
            foreach($employees as $employee){
                App\Employee::create($employee);
            }

    }
}
