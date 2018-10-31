<?php

namespace App\Http\Controllers\Teacher;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Supply;

use Auth;

class TeacherController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');   
    } 
    public function index()
    {
        
        $teacher = Auth::user();
        return view('teacher.home',compact('teacher'));
    }
}
