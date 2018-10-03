<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    protected $fillable = ['name', 'degree', 'shift','order','course_id'];
    protected $guarded = ['id', 'created_at', 'update_at'];


    public function course()
    {
        return $this->belongsTo(Course::class);
    }    
}
