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
    public function grades()
    {
        return $this->hasManyThrough(Grade::class,Course::class);
    }
    public function managers()
    {
        return $this->hasMany(Users\Manager::class);
    }   
    const RULES = [
        'name'      => 'required|between:3,100',
        'address'   => 'required|max:256', 
        'number'    => 'required|min:1|max:5',
        'phone'     => 'required|min:8|max:12',
        'email'     => 'required|email',
        'city_id'   => 'required',
    ];
    const MESSAGES = [
        'required'          => 'O campo :attribute é de preenchimento obrigatório!',
        'name.between'      => 'O campo nome deve ter entre 3 e 100 caracteres',
        'number.between'      => 'O campo número deve ter entre 1 e 5 caracteres',
        'phone.between'      => 'O campo telefone deve ter entre 8 e 12 caracteres',
    ];

}
