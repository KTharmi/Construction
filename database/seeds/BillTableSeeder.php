<?php
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class BillTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $bills = [
            [
             'BillNo' => 'S0001',
             'Total' => '10000.00',
            ]

            ];
            foreach($bills as $bill){
                App\Bill::create($bill);
            }
    }
}
