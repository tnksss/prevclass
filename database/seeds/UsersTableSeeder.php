<?php

use Illuminate\Database\Seeder;
use App\Models\Users\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'      => 'Usuário',
            'email'     => 'user@teste.com',
            'password'  => bcrypt('abc123'),
        ]);   
     }
}
