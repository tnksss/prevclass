<?php

use Illuminate\Database\Seeder;
use App\Models\Users\Manager;

class ManagersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Manager::create([
            'name'      => 'Fernanda Malage',
            'email'     => 'manager@teste.com',
            'cpf'       => '06222476970',
            'password'  => bcrypt('abc123'),
            'unity_id'  => 1,
    
        ]);
        Manager::create([
            'name'      => 'Lara Sophie Barbosa',
            'email'     => 'laras@teste.com',
            'cpf'       => '02822476920',
            'password'  => bcrypt('abc123'),
            'unity_id'  => 2,
    
        ]);
    
    }
}
