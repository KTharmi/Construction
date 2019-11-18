<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class ProjectTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $projects = [
            [
             'ProName' => 'Villa',
             'ProAddress' => 'Vanni',
             'description' => '5square area',
             'proStartDate'=>'2019-10-01',
            ],
            [
                'ProName' => 'House Building',
                'ProAddress' => 'Kaithady',
                'description' => '10sq area',
                'proStartDate'=>'2019-01-01',
                'proEndDate' => '2019-05-10',
            ],
            [
                'ProName' => 'Wall Painting',
                'ProAddress' => 'Avarangal',
                'description' => '750m',
                'proStartDate'=>'2019-10-01',
                'proEndDate' => '2019-11-10',
            ],
            [
                'ProName' => 'House Building',
                'ProAddress' => 'Chavakachcheri',
                'description' => '40 sq area',
                'proStartDate' => '2019-09-10',
            ],
            

            ];
            foreach($projects as $project){
                App\Project::create($project);
            }
    }
}
