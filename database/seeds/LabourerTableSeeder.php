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
             'LabName' => 'Mr K Ragu',
             'LabType' => 'Main Mason',
             'LabPhoneNo' =>'0771002230'
            ],
            [
                'LabName' => 'Mr R Suresh',
                'LabType' => 'Main Mason',
                'LabPhoneNo' =>'0771002121'
               ],
               [
                'LabName' => 'Mr T Venan',
                'LabType' => 'Mason',
                'LabPhoneNo' =>'0771002215'
               ],
               [
                'LabName' => 'Mr T Tharshan',
                'LabType' => 'Mason',
                'LabPhoneNo' =>'0771001230'
               ],
               [
                'LabName' => 'Mr T Kanthan',
                'LabType' => 'Plumber',
                'LabPhoneNo' =>'0770022230'
               ],
               [
                'LabName' => 'Mr L Namasivayam',
                'LabType' => 'Paintor',
                'LabPhoneNo' =>'0771001230'
               ],
               [
                'LabName' => 'Mr G Janankan',
                'LabType' => 'Paintor',
                'LabPhoneNo' =>'0771003022'
               ],
               [
                'LabName' => 'Mr U Ugen',
                'LabType' => 'Electrician',
                'LabPhoneNo' =>'0772210030'
               ],
               [
                'LabName' => 'Mr N Sarves',
                'LabType' => 'Electrician',
                'LabPhoneNo' =>'0772302230'
               ],
               [
                'LabName' => 'Mr S Elilan',
                'LabType' => 'Carpenter',
                'LabPhoneNo' =>'0770002230'
               ],

            ];
            foreach($labourers as $labourer){
                App\Labourer::create($labourer);
            }
    }
}
