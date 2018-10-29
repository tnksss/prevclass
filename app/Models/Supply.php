<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Supply extends Model
{
    protected $fillable = ['user_id', 'grade_id', 'supplyDate'];
    protected $guarded = ['id', 'created_at', 'update_at'];

    public function teacher()
    {
        return $this->belongsTo(Users/User::class);
    }
    public function grade()
    {
        return $this->belongsTo(Grade::class);
    }
}
