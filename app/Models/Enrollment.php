<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Enrollment extends Model
{
    protected $fillable = ['grade_id', 'student_id','enrollmentDate'];
    protected $guarded = ['id', 'created_at', 'update_at'];

    public function student()
    {
        return $this->belongsTo(Student::class);
    }
    public function grade()
    {
        return $this->belongsTo(Grade::class);
    }
}
