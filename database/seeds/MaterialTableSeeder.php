<?php
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class MaterialTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $materials = [
            [
             'MatName' => 'Sand',
             'MatType' => 'small-sand',
             'UnitPrice' => '15000',
            ],
            [
                'MatName' => 'Sand',
                'MatType' => 'large-sand',
                'UnitPrice' => '13000',
            ]

            ];
            foreach($materials as $material){
                App\Material::create($material);
            }
    }
}
