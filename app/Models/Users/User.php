<?php

namespace App\Models\Users;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Models\Grade;
use App\Models\Supply;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','cpf',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function supplies()
    {        
        return $this->hasMany(Supply::class);
    }

    public function grades()
    {
        return $this->belongsToMany(Grade::class, 'supplies');
    }

    

    const RULES = [
        'name'  => 'required|between:3,100',
        'cpf'   => 'unique:users|required|numeric|digits:11',
        'email' => 'unique:users|required|email'
    ];
    const MESSAGES = [
        'unique'            => 'O campo :attribute já está sendo utilizado',
        'required'          => 'O campo :attribute é de preenchimento obrigatório!',
        'name.between'      => 'O campo nome deve ter entre 3 e 100 caracteres',
        'digits'            => 'O campo cpf deve ter 11 caracteres',
    ];
}