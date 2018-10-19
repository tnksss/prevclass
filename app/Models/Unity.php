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
    
    public function courses()
    {
        return $this->hasMany(Course::class);
    }
    public function managers()
    {
        return $this->hasMany(Users\Manager::class);
    }
   
    public function suppliedTeachers()
    {
        return $this->hasManyThrough(Users\User::class, Supply::class);
    }
    public function teachers()
    {
        return $this->hasMany(Users\User::class);
    }
    
    public function supplies()
    {
        return $this->hasMany(Supply::class);
    }
}
