<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class CustomerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $customers = [
            [
             'CustName' => 'Kanthashamy',
             'CustAdress' => 'Vanni',
             'CustPhoneNo' => 0774510762,
            ],
            [
             'CustName' => 'Rameshwaran',
             'CustAdress' => 'Vavunikulam',
             'CustPhoneNo' => 0774544762,
            ]

            ];
            foreach($customers as $customer){
                App\Customer::create($customer);
            }
    }
}
