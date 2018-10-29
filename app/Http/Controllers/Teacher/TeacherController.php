<?php

namespace App\Http\Controllers\Teacher;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class TeacherController extends Controller
{
    public function index()
    {
        $teacher = Auth::user();
        
        return view('teacher.home',compact('teacher'));
    }
}
