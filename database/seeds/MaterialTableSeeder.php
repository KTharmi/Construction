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
             'MatName' => 'Bricks',
             'UnitPrice' => '6',
            ],
            [
                'MatName' => 'Cement',
                'UnitPrice' => '660',
            ],
            [
                'MatName' => 'Clips and Nails 1 " ',
                'UnitPrice' => '7',
               ],
               [
                   'MatName' => 'Clips and Nails 1 1/2 " ',
                   'UnitPrice' => '10',
               ],
               [
                'MatName' => 'Clips and Nails 1 1/4 " ',
                'UnitPrice' => '8',
               ],
               [
                   'MatName' => 'Clips and Nails 2 " ',
                   'UnitPrice' => '10',
               ],
               [
                'MatName' => 'Enamel Paint',
                'UnitPrice' => '354',
               ],
               [
                   'MatName' => 'Emulsion Paint',
                   'UnitPrice' => '280',
               ],
               [
                'MatName' => 'Sand',
                'UnitPrice' => '3000',
               ],
               [
                   'MatName' => 'Sand Paper',
                   'UnitPrice' => '3',
               ],
               [
                'MatName' => 'Tiles Pressed  - 12" X 12"',
                'UnitPrice' => '180',
               ],
               [
                   'MatName' => 'Tiles Pressed  - 8" X 8"',
                   'UnitPrice' => '125',
               ],
               [
                'MatName' => 'Tiles Terrazzo - 12" X 12"',
                'UnitPrice' => '150',
               ],
               [
                   'MatName' => 'Wire Brush"',
                   'UnitPrice' => '65',
               ],
               [
                'MatName' => 'Tiles Terrazzo -  6" X 6"',
                'UnitPrice' => '100',
               ],
               [
                   'MatName' => 'Timber Reepers - 2"X1" ',
                   'UnitPrice' => '12',
               ],
               [
                'MatName' => 'Timber Strips - 2" X 1/4" ',
                'UnitPrice' => '5',
               ],
               [
                   'MatName' => 'Varnish',
                   'UnitPrice' => '355',
               ],
               [
                'MatName' => 'Wall Tiles Glazed 8" x 12"',
                'UnitPrice' => '100',
               ],
               [
                   'MatName' => 'White Cement/ tile grout',
                   'UnitPrice' => '17',
               ],

            ];
            foreach($materials as $material){
                App\Material::create($material);
            }
    }
}
