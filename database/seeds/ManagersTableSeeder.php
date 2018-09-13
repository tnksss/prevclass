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
            'password'  => bcrypt('abc123'),
        ]);
    }
}
