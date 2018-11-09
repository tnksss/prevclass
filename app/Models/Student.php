<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Student extends Model
{
    protected $fillable = ['name', 'cgm','bornDate'];
    protected $guarded = ['id', 'created_at', 'update_at'];

    public function age() {
        return Carbon::parse($this->bornDate)->diffInYears(Carbon::now());
    }
    public function bornDate()
    {
        return Carbon::parse($this->bornDate)->format('d-m-Y');
    }

    public function enrollments()
    {
        return $this->hasMany(Enrollment::class);
    }

    const RULES = [
        'name' => 'required|between:3,100',
        'cgm' => 'required|between:2,10|numeric', 
        'bornDate' => 'required|date'
    ];

    const MESSAGES = [
        'required'          => 'O campo :attribute é de preenchimento obrigatório!',
        'name.between'      => 'O campo nome deve ter entre 3 e 100 caracteres',
        'cgm.between'      => 'O campo código deve ter entre 2 e 10 caracteres',
    ];
}
