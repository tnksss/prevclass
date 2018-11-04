<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    protected $fillable = ['name', 'degree', 'shift','order','course_id','year','status'];
    protected $guarded = ['id', 'created_at', 'update_at'];


    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    public function teachers()
    {
        return $this->belongsToMany(Users/User::class,'supplies');
    }

    public function shift($shift)
    {
        switch ($shift){
            case 1:
                return "Manhã";
            case 2:
                return "Intermediário Manhã";
            case 3:
                return "Tarde";
            case 4:
                return "Intermediário Tarde";
            case 5:
                return "Noite";
        }
            
    }
    public function enrollments()
    {
        return $this->hasMany(Enrollment::class);
    }
    public function students()
    {
        return $this->hasManyThrough(Student::class,Enrollment::class);
    }
    const RULES = [
        
        'degree' => 'required|min:4',
        'shift' => 'required|numeric',
        'course_id' => 'required|numeric',
        'year' => 'required',
        'status' => 'required',
        'order' => 'required|alpha|max:1',
        'order' => 'unique:grades,degree',      

    ];

    const MESSAGES = [
        'required'          => 'O campo :attribute é de preenchimento obrigatório!',
        'name.between'      => 'O campo nome deve ter entre 3 e 100 caracteres',
        'code.between'      => 'O campo código deve ter entre 2 e 10 caracteres',
    ];
}
