<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Enrollment extends Model
{
    protected $fillable = ['grade_id', 'student_id','enrollmentDate','status'];
    protected $guarded = ['id', 'created_at', 'update_at'];

    public function student()
    {
        return $this->belongsTo(Student::class);
    }
    public function grade()
    {
        return $this->belongsTo(Grade::class);
    }
    const RULES = [
        'student_id' => 'required|unique:grades,id',
        'grade_id' => 'unique:shifts,id',
        'grade_id' => 'required',
        'enrollmentDate' => 'required|date',
        'status' => 'required',
    ];

    const MESSAGES = [
        'required'          => 'O campo :attribute é de preenchimento obrigatório!',
        'student_id.unique' => 'O aluno já possui matrícula nesta turma',
    ];
}
