<?php

use Illuminate\Database\Seeder;
use App\Models\Users\User;
use Faker\Factory as Faker;
use Faker\Provider\pt_BR\Person;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $faker = Faker::create();
        // for ($i=0; $i <10 ; $i++) { 
                    
        // User::create([
        //     'name'      => $faker->name,
        //     'email'     => $faker->unique()->safeEmail,
        //     'cpf'       => $faker->cpf(false),
        //     'password'  => bcrypt('abc123'),
        // ]);   

        factory(User::class, 50)->create();

     }
}
