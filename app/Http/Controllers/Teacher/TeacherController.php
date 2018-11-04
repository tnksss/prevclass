<?php

namespace App\Http\Controllers\Teacher;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Supply;
use App\Models\Unity;

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
        $grades = $teacher->grades;    
                        
        return view('teacher.home',compact('teacher','grades'));
    } 
}
