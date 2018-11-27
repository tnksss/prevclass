<?php

namespace App\Models\Users;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Notifications\ManagerResetPasswordNotification;
use App\Models\Unity;

class Manager extends Authenticatable
{
    use Notifiable;

    protected $guard = 'manager';

    protected $fillable = [
        'name', 'email', 'cpf','password','unity_id','avatar',
    ];
    
    protected $hidden = [
        'password', 'remember_token',
    ];

    const RULES = [
        'name' => 'required|between:3,100',
        'email' => 'unique:managers|required|email',
        'cpf' => 'unique:managers|required|digits:11'

    ];

    const MESSAGES = [
        'unique'            => 'O campo :attribute já está sendo utilizado',
        'required'          => 'O campo :attribute é de preenchimento obrigatório!',
        'name.between'      => 'O campo nome deve ter entre 3 e 100 caracteres',
        'digits'            => 'O campo cpf deve ter 11 caracteres',
    ];

    public function unity() 
    {
        return $this->belongsTo(Unity::class);
    }
    public function sendPasswordResetNotification($token)
    {
        $this->notify(new ManagerResetPasswordNotification($token));
    }
}
