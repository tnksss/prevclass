<?php

use Illuminate\Database\Seeder;
use App\Models\Unity;

class UnitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Unity::create([
            'name'      => 'Colégio Estadual do Campo Dom Pedro I',
            'address'   => 'Rua Emilio Lack',
            'number'    => '459',
            'city_id'   => 1,
            'phone'     => '42 36251438',
            'email'     => 'grpdompedro@seed.pr.gov.br',
            
    
        ]);
        Unity::create([
            'name'      => 'Escola Municipal Franscisco Peixoto de Lacerda e Werneck',
            'address'   => 'Rua da Agrária',
            'number'    => '180',
            'city_id'   => 80,
            'phone'     => '42 36251154',
            'email'     => 'escolalacerda@escola.com.br',
            
    
        ]);
    
    }
}


