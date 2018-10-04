<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Discipline extends Model
{
    protected $fillable = ['name', 'code'];
    protected $guarded = ['id', 'created_at', 'update_at'];	
}