<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = ['name', 'code'];
    protected $guarded = ['id', 'created_at', 'update_at'];	

    public function grades()
    {
        return $this->hasMany(Grade::class);
    }
    
    const RULES = [
        'name' => 'required|between:3,100',
        'code' => 'required|between:2,10',        

    ];

    const MESSAGES = [
        'required'          => 'O campo :attribute é de preenchimento obrigatório!',
        'name.between'      => 'O campo nome deve ter entre 3 e 100 caracteres',
        'code.between'      => 'O campo código deve ter entre 2 e 10 caracteres',
    ];

}
