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
        ]);

        $courses->each(function ($code,$name){
            Course::create([
                'name'      => $name,
                'code'      => $code,  
            ]);
        });
        $courses->each(function ($code,$name){
            Course::create([
                'name'      => $name,
                'code'      => $code,  
            ]);
        });
        
    
    }
}
