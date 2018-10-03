<?php

use Illuminate\Database\Seeder;
use App\Models\Discipline;

class DisciplinesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $disciplines = collect([
            'Arte' => '0704',
            'Biologia' => '1001',
            'Ciências' => '0301',
            'Educação Física' => '0601',
            'Ensino Religioso' => '7502',
            'Espanhol' => '0288',
            'Fílosofia' => '2201',
            'Física' => '0901',
            'Geografia' => '0401',
            'História' => '0501',            
            'LEM - Inglês' => '1107',
            'Língua Portuguesa' => '0106',
            'Matemática' => '0201',
            'Química' => '0899',
            'Sociologia' => '2301',

        ]);

        $disciplines->each(function ($name,$code){
            Discipline::create([
                'name'      => $name,
                'code'      => $code,    
            ]);
        });
        
    
    }
}
