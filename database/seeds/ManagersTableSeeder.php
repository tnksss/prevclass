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
            'name'      => 'Usuário Secretário 1',
            'email'     => 'manager@teste.com',
            'cpf'       => '32132132132',
            'password'  => bcrypt('abc123'),
            'unity_id'  => 1,
    
        ]);
        Manager::create([
            'name'      => 'Usuário Secretário 2',
            'email'     => 'manager@teste.com',
            'cpf'       => '12312312312',
            'password'  => bcrypt('abc123'),
            'unity_id'  => 2,
        ]);
    
    }
}
