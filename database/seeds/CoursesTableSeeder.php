<?php

use Illuminate\Database\Seeder;
use App\Models\Course;

class CoursesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $courses= collect([
            'Ensino Fundamental' => '4039',
            'Ensino Médio' => '0009',
            'Aulas Especializadas de Treinamento Esportivo' => '3009',
            'Espanhol - CELEM' => '7018',
            'Espanhol - BÁSICO' => '7002',
        ]);

        $courses->each(function ($name,$code){
            Course::create([
                'name'      => $name,
                'code'      => $code,    
            ]);
        });
        
    
    }
}
