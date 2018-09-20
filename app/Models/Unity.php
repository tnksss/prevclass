<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Unity extends Model
{
    protected $fillable = ['name', 'address', 'number', 'phone', 'email','city_id'];
    protected $guarded = ['id', 'created_at', 'update_at'];	


    public function city()
    {
        return $this->belongsTo(City::class);
    }
}