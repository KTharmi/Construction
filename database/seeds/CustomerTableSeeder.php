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
             'CustName' => 'Thamotharam',
             'CustAdress' => '98A, Main Street, Thunukkai',
             'CustPhoneNo' => 0774510762,
            ],

            [
             'CustName' => 'Ponnuthurai',
             'CustAdress' => '31/4 Park Road, Mankulam ',
             'CustPhoneNo' => 0774510752,
            ],

               [
                'CustName' => 'Ramasamy',
                'CustAdress' => 'Avarangal South, Avarangal',
                'CustPhoneNo' => 0774510620,
               ],
               [
                'CustName' => 'Thevarani',
                'CustAdress' => 'Sangaththanai, Chavakachcheri',
                'CustPhoneNo' => 0774510000,
               ],

               [
                'CustName' => 'Vanniyasingam',
                'CustAdress' => 'Kaithady West, Kaithady',
                'CustPhoneNo' => 0774510020,
                ],
               [
                'CustName' => 'Rajaramanan',
                'CustAdress' => 'Sandilipai Thoddiladi, Sandilipai',
                'CustPhoneNo' => 0774510732,
               ],
               [
                'CustName' => 'Malarvizhi',
                'CustAdress' => '72/9 Temple Road, Nallur, Chavakachcheri',
                'CustPhoneNo' => 0774510510,
               ],
               [
                'CustName' => 'Mohanambal',
                'CustAdress' => 'Sangaththanai, Chavakachcheri',
                'CustPhoneNo' => 0774510300,
               ],

            ];
            foreach($customers as $customer){
                App\Customer::create($customer);
            }
    }
}
