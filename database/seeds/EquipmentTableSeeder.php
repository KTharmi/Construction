<?php
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class EquipmentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $equipments = [
            [
             'EquipName' => 'Lorry',
             'Rent' => '10000.00',
            ],
            [
                'EquipName' => 'Cantor',
                'Rent' => '5500.00',
            ]

            ];
            foreach($equipments as $equipment){
                App\Equipment::create($equipment);
            }
    }
}
