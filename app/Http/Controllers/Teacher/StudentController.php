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

    public function __construct()
    {
        return $this->middleware('auth');
    }
    public function show($grade_id, $enrollment_id)
    {        
        $concepts = Concept::where('enrollment_id',$enrollment_id)
                            ->get();
        $enrollment = Enrollment::find($enrollment_id);
        $student = Student::find($enrollment->student_id);

        return view('teacher.student.show',[
            'student'   =>  $student,
            'enrollment' => $enrollment,
            'concepts'  =>  $concepts
            ]);
    }
}
