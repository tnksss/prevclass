<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

//$this->call('CidadesParanaSeeder');

    //    $this->call('UnitiesTableSeeder');
        // $this->call('UsersTableSeeder');        
        $this->call('ManagersTableSeeder');        

        // $this->call('AdminsTableSeeder');        
        // $this->call('ShiftsTableSeeder');
  //      $this->call('DisciplinesTableSeeder');


    }
}
