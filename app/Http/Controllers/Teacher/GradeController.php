<?php

namespace App\Http\Controllers\Teacher;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Grade;

class GradeController extends Controller
{
    public function show($id)
    {
        $grade = Grade::find($id);
        $enrollments = $grade->enrollments;
        return view('teacher.grade.show',compact('grade','enrollments'));
    }
}
