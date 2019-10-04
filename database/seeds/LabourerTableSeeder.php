<?php
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class LabourerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $labourers = [
            [
             'LabName' => 'Ragu',
             'LabType' => 'meson',
             'LabPhoneNo' =>'0771002230'
            ]

            ];
            foreach($labourers as $labourer){
                App\Labourer::create($labourer);
            }
    }
}
