<?php

namespace App\Http\Controllers\Manager;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Grade;
use App\Models\Course;
use App\Models\Enrollment;
use Auth;
use Illuminate\Support\Facades\DB;

class GradeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:manager');
    }
    
    public function index(){
        $unity = Auth::guard('manager')->user()->unity;
        
        $courses = Course::has('grades')
                                    ->where('unity_id',$unity->id)
                                    ->orderBy('name')
                                    ->get();
        
        // $courses = Course::has('grades')->orderBy('name')
        //                                 ->get();

         return view('manager.grades.index',compact('courses'));
    }

    public function create()
    {
        $unity = Auth::guard('manager')->user()->unity;
        
        $courses = Course::where('unity_id',$unity->id)->get();
        
        $shifts = array(
            1 => 'Manhã',
            2 => 'Intermediário-Manhã',
            3 => 'Tarde',
            4 => 'Intermediário-Tarde',
            5 => 'Noite');
        
        
        return view('manager.grades.create', [
            'grade' => new Grade(),
            'courses' => $courses,
            'shifts' => $shifts

        ]);
    }

    
    public function store(Request $request)
    {
        $fields = $request->only('degree','shift','order','course_id','year','status');
        
        // Validação dos requests
        $validate = validator($fields, Grade::RULES, Grade::MESSAGES);
        if ($validate->fails())
            return redirect()
                ->back()
                ->withErrors($validate)
                ->withInput();     
        $course = Course::find($fields['course_id'])->code;
        $grade = substr($request['degree'],0,1);
        $fields['name'] = "{$course}{$grade}{$fields['shift']}{$fields['order']}";
        
        // Validação de existencia da turma no ano letivo da unidade
        $grades = Auth::guard('manager')->user()->unity->grades->where('year',$fields['year'])->where('status','1');
        if($grades->contains('name',$fields['name']))
                return  redirect()
                        ->back()
                        ->with('error','Turma já existe neste período letivo');
        
        (new Grade($fields))->save();

        return redirect()
            ->route('grades.index')
            ->with('success', 'Turma criada com sucesso');
    }
    public function show($id)
    {
        $grade = Grade::find($id);
        $enrollments = $grade->enrollments;
        return view('manager.grades.show',[
            'grade' => $grade,
            'enrollments' => $enrollments
        ]);
    }

    public function edit($id)
    {
        $shifts = collect([ 1 => 'Manhã',
                        2 => 'Intermediário-Manhã',
						3 => 'Tarde',
						4 => 'Intermediário-Tarde',
                        5 => 'Noite']);
        $courses = Course::all();
        $grade = Grade::find($id);
        $selectedCourse = $grade->course_id;
        
                        
        return view('manager.grades.edit', [
            'grade'             => $grade,
            'courses'           => $courses,
            'selectedCourse'    => $selectedCourse,
            'shifts'            => $shifts
        ]);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'degree' => 'required|between:2,10',
            'shift' => 'required',
            'order' => 'required',
            'course_id' => 'required',
        ]);

        $fields = $request->only('degree','shift','order','course_id','year','status');
        
        $course = Course::find($fields['course_id'])->code;
        $grade = substr($request['degree'],0,1);
        $fields['name'] = "{$course}{$grade}{$fields['shift']}{$fields['order']}";

        Grade::find($id)->fill($fields)->save();

        return redirect()
            ->route('grades.index')
            ->with('success', 'Turma atualizada com sucesso.');
    }
    
    public function destroy($id)
    {
        
        Grade::destroy($id);
        return redirect()
            ->route('grades.index')
            ->with('success', 'Turma deletada com sucesso.');
    }
}
