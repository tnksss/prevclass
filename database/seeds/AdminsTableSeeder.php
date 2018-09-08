<?php

use Illuminate\Database\Seeder;
use App\Models\Users\Admin;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Admin::create([
            'name'      => 'Robson Barbosa',
            'email'     => 'admin@teste.com',
            'password'  => bcrypt('abc123'),
        ]);
    }
}
