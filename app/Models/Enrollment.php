<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Concept;
use Carbon\Carbon;

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
    public function concepts()
    {
        return $this->hasMany(Concept::class);
    }
    const STATUSES = [
        'MATRICULADO' => 'MATRICULADO',
        'REMANEJADO' => 'REMANEJADO',
        'TRANSFERIDO'=> 'TRANSFERIDO',
        'DESISTENTE'=> 'DESISTENTE',
    ];

    public function teacherConcept()
    {
        $concept = Concept::where([
            ['user_id', '=', \Auth::user()->id],
            ['enrollment_id', '=', $this->id]
        ])->first();
        
        if (is_null($concept)){
            
            $concept = new Concept;
            $concept->user_id = \Auth::user()->id;
            $concept->enrollment_id = $this->id;
            $concept->save();    
        }
        return $concept;
    }
    public function enrollmentDate()
    {
        return Carbon::parse($this->enrollmentDate)->format('d-m-Y');
    }    

    
}
