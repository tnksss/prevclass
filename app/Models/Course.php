<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = ['name', 'code'];
    protected $guarded = ['id', 'created_at', 'update_at'];	

    public function grades()
    {
        return $this->hasMany(Grade::class);
    }
}
