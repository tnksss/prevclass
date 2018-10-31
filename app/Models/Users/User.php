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
        return DB::select(DB::raw('SELECT u.id u_id, u.name u_name, g.*
                            FROM grades g
                            JOIN courses c ON (g.course_id = c.id)
                            JOIN unities u ON (c.unity_id = u.id)
                            JOIN supplies s ON (s.grade_id = g.id)
                            WHERE s.user_id = :teacher_id
                            ORDER BY u.name, u.id'),array('teacher_id' => $this->id));
    }

    public function grades2()
    {
    }

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