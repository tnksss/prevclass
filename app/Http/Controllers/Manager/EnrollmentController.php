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

        
        $grades = Auth::guard('manager')->user()->unity->grades->where('year','2018')->where('status','1');
        return view('manager.enrollments.create',[
            'student'   => $student,
            'grades'    => $grades,
            'statuses'  => Enrollment::STATUSES
            ]);
    }

    public function store(Request $request)
    {
        $fields = $request->only('student_id','grade_id','enrollmentDate','status');
        
        $rules = [
            'grade_id' => "required|unique:enrollments,grade_id,NULL,id,student_id,{$request['student_id']}",
            'enrollmentDate' => 'required',
            'status' => 'required',
        ];
        $messages = [
            'required'        => 'O campo :attribute é de preenchimento obrigatório!',
            'grade_id.unique' => 'Aluno com matricula ativa nesta turma'
        ];
        
        $validate = validator($fields,$rules,$messages);
        if ($validate->fails())
            return redirect()
                        ->back()
                        ->withErrors($validate)
                        ->withInput();
        
        $enrollments = Enrollment::where('student_id',$request['student_id'])
                                 ->where('status','MATRICULADO')
                                 ->get();
        
        foreach ($enrollments as $enrollment){
        //    dd(Grade::find($request['grade_id'])->shift,$enrollment->grade->shift);
            if($enrollment->grade->shift == Grade::find($request['grade_id'])->shift);
                return redirect()
                            ->back()
                            ->with('error','Aluno com matrícula ativa no mesmo turno')
                            ->withInput();
        }
        
        $enrollment = new Enrollment($fields);
        $enrollment->save();
        return redirect()
            ->route('grades.show',['id' => $enrollment->grade_id])
            ->with('success', 'Aluno matriculado com sucesso!');
    }
}
