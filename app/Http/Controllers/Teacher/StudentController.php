<?php

namespace App\Http\Controllers\Teacher;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Student;
use App\Models\Enrollment;
use App\Models\Concept;
use Auth;

class StudentController extends Controller
{
    public function show($enrollment_id,$student_id)
    {


        $concepts = Concept::where('enrollment_id',$enrollment_id)->where('user_id',Auth::user()->id)->get();
        
        $student = Student::find($student_id);
        $enrollment = Enrollment::find($enrollment_id);
        return view('teacher.student.show',[
            'student'   =>  $student,
            'enrollment' => $enrollment,
            'concepts'  =>  $concepts
            ]);
    }
}
