<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = ['name', 'cgm'];
    protected $guarded = ['id', 'created_at', 'update_at'];
}
