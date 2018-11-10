<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Concept extends Model
{
    protected $fillable = ['user_id', 'enrollment_id','criterion_1','criterion_2','criterion_3',
                           'criterion_4','criterion_5','criterion_6','criterion_7','criterion_8','comment'];
    protected $guarded = ['id', 'created_at', 'update_at'];	

    public function enrollment()
    {
        return $this->belongsTo(Enrollment::class);
    }
    public function teacher()
    {
        return $this->belongsTo(Users\User::class);
    }
}
