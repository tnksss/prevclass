<?php

namespace App\Models\Users;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Models\Unity;

class Manager extends Authenticatable
{
    use Notifiable;

    protected $guard = 'manager';

    protected $fillable = [
        'name', 'email', 'password','unity_id','avatar',
    ];
    
    protected $hidden = [
        'password', 'remember_token',
    ];

    const RULES = [
        'name' => 'required|between:3,100',
        'email' => 'required',
        'password' => 'required|between:6,20'

    ];

    const MESSAGES = [
        'required'          => 'O campo :attribute é de preenchimento obrigatório!',
        'name.between'      => 'O campo nome deve ter entre 3 e 100 caracteres',
        'password.between'  => 'O campo senha deve ter entre 6 e 20 caracteres',
    
        
    ];

    public function unity() 
    {
        return $this->belongsTo(Unity::class);
    }
}
