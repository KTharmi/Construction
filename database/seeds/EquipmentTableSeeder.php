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
             'EquipName' => 'Bulldozer',
             'Rent' => '60000.00',
            ],
            [
                'EquipName' => 'Excavator',
                'Rent' => '50000.00',
            ],
            [
                'EquipName' => 'Loader',
                'Rent' => '70000.00',
            ],
            [
                'EquipName' => 'Tower Crane',
                'Rent' => '60000.00',
            ],
            [
                'EquipName' => 'Pile Boring Machine',
                'Rent' => '28000.00',
            ],
            [
                'EquipName' => 'Pile Driving Machine',
                'Rent' => '62000.00',
            ],
            [
                'EquipName' => 'Dragline Excavator',
                'Rent' => '65000.00',
            ],
            [
                'EquipName' => 'Tower Crane',
                'Rent' => '60000.00',
            ],

            ];
            foreach($equipments as $equipment){
                App\Equipment::create($equipment);
            }
    }
}
