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
                'ProAddress' => '98A, Main Street, Thunukkai',
                'description' => '12sq area',
                'proStartDate'=>'2018-01-29',
                'proEndDate' => '2018-08-10',
                'CustId' => '1',
            ],
            [
                'ProName' => 'Springfield',
                'ProAddress' => '31/4 Park Road, Mankulam ',
                'description' => '15sq area',
                'proStartDate'=>'2018-06-11',
                'proEndDate' => '2019-02-10',
                'CustId' => '2',
            ],
            [
                'ProName' => 'Saraswathi Illam',
                'ProAddress' => 'Kaithady West, Kaithady',
                'description' => '10sq area',
                'proStartDate'=>'2019-04-13',
                'CustId' => '3',
            ],
            [
                'ProName' => 'Bahavathi Illam',
                'ProAddress' => 'Avarangal South, Avarangal',
                'description' => '35 sq area',
                'proStartDate'=>'2019-10-01',
                'CustId' => '4',
            ],
            [
                'ProName' => 'Jeyachithralayam',
                'ProAddress' => 'Sangaththanai, Chavakachcheri',
                'description' => '40 sq area',
                'proStartDate' => '2019-01-10',
                'proEndDate' => '2019-09-21',
                'CustId' => '5',
            ],
            [
                'ProName' => 'Sanmugavasa',
                'ProAddress' => 'Sandilipai Thoddiladi, Sandilipai',
                'description' => '43 sq area',
                'proStartDate' => '2019-09-10',
                'CustId' => '6',
            ],
            [
                'ProName' => 'Dharsan Illam',
                'ProAddress' => '72/9 Temple Road, Nallur, Chavakachcheri',
                'description' => '45 sq area',
                'proStartDate' => '2019-03-19',
                'proEndDate' => '2019-07-30',
                'CustId' => '7',
            ],
            [
                'ProName' => 'Luxlayam',
                'ProAddress' => 'Sangaththanai, Chavakachcheri',
                'description' => '40 sq area',
                'proStartDate' => '2019-10-11',
                'CustId' => '8',
            ],
        ];
            foreach($projects as $project){
                App\Project::create($project);
            }
    }
}
