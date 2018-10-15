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
}
