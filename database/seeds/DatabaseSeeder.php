<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str; 

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call([
             UserTableSeeder::class,
             RoleTableSeeder::class,
             EmployeeTableSeeder::class,
             CustomerTableSeeder::class,
             ProjectTableSeeder::class,
             MaterialTableSeeder::class,
             LabourerTableSeeder::class,
             BillTableSeeder::class,
<<<<<<< HEAD
            // EquipmentTableSeeder::class,
=======
             //EquipmentTableSeeder::class,
>>>>>>> 96c07bc00e5d00dafabc9e436a45736786c27836
         ]);
    }
}
