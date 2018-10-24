<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Course;

class CourseController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function index(){

        $courses = Course::orderBy('code')->paginate(5);
        return view('admin.course.index',compact('courses'));
    }

    public function create($id)
    {
        
        
        return view('admin.course.create', [
            'course' => new Course(),
            'id' => $id
        ]);
    }

    
    public function store(Request $request, $id)
    {
       
            
        $fields = $request->only('name', 'code');
        $validate = validator($fields, Course::RULES, Course::MESSAGES);
        
        if ($validate->fails())
            return redirect()
                ->back()
                ->withErrors($validate)
                ->withInput();
        
        $course = new Course($fields);
        $course->unity_id = $id;

        return redirect()
                ->route('unities.show',['id' => $course->unity_id])
                ->with('success', 'Curso cadastrado com sucesso');
    }

    public function edit($id)
    {
        return view('admin.course.edit', [
            'course' => Course::find($id)
        ]);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'code' => 'required',
        ]);

        $fields = $request->only('name', 'code');
        Course::find($id)->fill($fields)->save();

        return redirect()
            ->route('courses.index')
            ->with('success', 'Curso atualizado com sucesso.');
    }
    
    public function destroy($unity_id, $course_id)
    {
        
        Course::destroy($course_id);
        return redirect()
        ->route('unities.show',['id' => $unity_id])
            ->with('success', 'Curso deletado com sucesso.');
    }
}
