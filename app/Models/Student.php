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
}
