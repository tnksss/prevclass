<?php

namespace App\Http\Controllers\Manager;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Grade;
use App\Models\Course;

class GradeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:manager');
    }
    
    public function index(){

        $courses = Course::has('grades')->orderBy('name')
                                        ->get();

        return view('manager.grades.index',compact('courses'));
    }

    public function create()
    {
        $courses = Course::all();
        return view('manager.grades.create', [
            'grade' => new Grade(),
            'courses' => $courses
        ]);
    }

    
    public function store(Request $request)
    {
        $this->validate($request, [
            'degree' => 'required|between:2,10',
            'shift',
            'order' => 'required',
            'course_id' => 'required',
        ]);

        $fields = $request->only('degree','shift','order','course_id');

        $course = Course::find($fields['course_id'])->code;
        $grade = substr($request['degree'],0,1);
        $fields['name'] = "{$course}{$grade}{$fields['shift']}{$fields['order']}";
        
        (new Grade($fields))->save();

        return redirect()
            ->route('grades.index')
            ->with('success', 'Turma criada com sucesso');
    }

    public function edit($id)
    {
        $shifts = collect([ 1 => 'Manhã',
                        2 => 'Intermediário-Manhã',
						3 => 'Tarde',
						4 => 'Intermediário-Tarde',
                        5 => 'Noite']);
                        
        return view('manager.grades.edit', [
            'grade' => Grade::find($id),
            'courses' => Course::all(),
            'shifts' => $shifts
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

        $fields = $request->only('degree','shift','order','course_id');
        
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
