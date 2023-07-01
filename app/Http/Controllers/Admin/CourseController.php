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

    public function create()
    {               
        return view('admin.course.create', [
            'course' => new Course(),
        ]);
    }

    
    public function store(Request $request)
    {
       
            
        $fields = $request->only('name', 'code');
        $validate = validator($fields, Course::RULES, Course::MESSAGES);
        
        if ($validate->fails())
            return redirect()
                ->back()
                ->withErrors($validate)
                ->withInput();
        
        $course = new Course($fields);
        
        $course->save();

        return redirect()
                ->route('courses.index')
                ->with('success', 'Curso cadastrado com sucesso');
    }

    public function edit($course_id)
    {
        
        return view('admin.course.edit', [
            'course' => Course::find($course_id)
        ]);
    }

    public function update(Request $request, $course)
    {
        $this->validate($request, [
            'name' => 'required',
            'code' => 'required',
        ]);

        $fields = $request->only('name', 'code');
        Course::find($course)->fill($fields)->save();

        return redirect()
            ->route('courses.index')
            ->with('success', 'Curso atualizado com sucesso.');
    }
    
    public function destroy($course_id)
    {
        
        Course::destroy($course_id);
        return redirect()
        ->route('courses.index')
            ->with('success', 'Curso deletado com sucesso.');
    }
}
