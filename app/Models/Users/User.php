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


    // public function grades()
    // {
    //     return Grade::join('supplies','supplies.id','=','grades.course_id')
    //                 ->where('unity_id',$this->unity_id)
    //                 ->get();
    // }

    const RULES = [
        'name'  => 'required|between:3,100',
        'cpf'   => 'required|numeric|digits:11',
        'email' => 'required|email'
    ];
    const MESSAGES = [
        'required'          => 'O campo :attribute é de preenchimento obrigatório!',
        'name.between'      => 'O campo nome deve ter entre 3 e 100 caracteres',
        'digits'            => 'O campo cpf deve ter 11 caracteres',
    ];
}