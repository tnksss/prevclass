<?php

namespace App\Http\Controllers\Manager;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Grade;
use App\Models\Student;
use App\Models\Enrollment;

class EnrollmentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:manager');
    }

    public function find()
    {
        return view('manager.enrollments.find-student');
    }

    public function findStudent(Request $request)
    {
        
        $cgm = $request->cgm;
        
        $student = Student::where('cgm',$cgm)->first();
        
        $grades = Grade::all();
        return view('manager.enrollments.create',[
            'student'   => $student,
            'grades'    => $grades
            ]);
    }

    public function store(Request $request)
    {
        
        $this->validate($request, [
            'student_id' => 'required',
            'grade_id' => 'required',
            'enrollmentDate' => 'required',
        ]);
        $fields = $request->only('student_id','grade_id','enrollmentDate');
        
        $enrollment = new Enrollment($fields);
        
        $enrollment->save();
        return redirect()
            ->route('grades.show',['id' => $enrollment->grade_id])
            ->with('success', 'Aluno matriculado com sucesso!');

    }
}
