<?php

namespace App\Http\Controllers\Teacher;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Grade;

class GradeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function show($id) 
    {
        $teacher = \Auth::user();        
        $grade = Grade::find($id);

        if(!$teacher->grades->contains($grade))
            return redirect()
                        ->route('teacher.home')
                        ->with('error','Você não está suprido nesta turma');

        $enrollments = $grade->enrollments;
        return view('teacher.grade.show',compact('grade','enrollments'));
    }
}