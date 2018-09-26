<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SchoolYear extends Model
{
    protected $fillable = ['year', 'status','unity_id'];
    protected $guarded = ['id', 'created_at', 'update_at'];	
}