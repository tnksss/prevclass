<?php

namespace App\Http\Controllers\Manager;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Grade;
use App\Models\Student;
use App\Models\Enrollment;
use Auth;
use Illuminate\Support\Facades\DB;

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
        $this->validate($request,[
            'cgm' => 'required|numeric'
        ]);
        $cgm = $request->cgm;
        $student = Student::where('cgm',$cgm)->first();
        if ($student == null)
            return redirect()
                            ->back()
                            ->with('error','CGM não encontrado!');

        $statuses = [
            'MATRICULADO' => 'MATRICULADO',
            'REMANEJADO' => 'REMANEJADO',
            'TRANSFERIDO'=> 'TRANSFERIDO',
            'DESISTENTE'=> 'DESISTENTE',
        ];
        // $unity = Auth::guard('manager')->user()->unity;
        // $courses = DB::table('courses')->select('id')->where('unity_id',$unity->id)->get();
        // $grades = Grade::all()->whereIn('course_id',$courses);
        // dd($grades);
        
        $grades = Auth::guard('manager')->user()->unity->grades->where('year','2018')->where('status','1');
        return view('manager.enrollments.create',[
            'student'   => $student,
            'grades'    => $grades,
            'statuses'  => $statuses
            ]);
    }

    public function store(Request $request)
    {
        
        $this->validate($request, [
            // 'student_id' => 'required|unique:grades,id',
             'grade_id' => "required|unique:enrollments,grade_id,NULL,id,student_id,{$request['student_id']}",
            //'grade_id' => 'required',
            'enrollmentDate' => 'required',
            'status' => 'required',
        ]);
        $enrollments = Enrollment::where('grade_id',$request['student_id'])->where('grade_id',$request['student_id']);
        // dd($enrollments->count());
        
        $fields = $request->only('student_id','grade_id','enrollmentDate','status');
        
        $enrollment = new Enrollment($fields);
        
        $enrollment->save();
        return redirect()
            ->route('grades.show',['id' => $enrollment->grade_id])
            ->with('success', 'Aluno matriculado com sucesso!');

    }
}
