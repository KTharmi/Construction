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
             'CustId' => '1',
            ],
            [
                'ProName' => 'akil',
                'ProAddress' => 'Vsdni',
                'description' => '5square aredsfa',
                'proStartDate'=>'2019-10-01',
                'CustId' => '2',
               ]

            ];
            foreach($projects as $project){
                App\Project::create($project);
            }
    }
}
