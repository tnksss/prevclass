<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Course;

class CourseController extends Controller
{
    public function index(){

        $courses = Course::all();
        return view('admin.course.index',compact('courses'));
    }

    public function create()
    {
        return view('admin.course.create', [
            'course' => new Course()
        ]);
    }

    
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|between:2,100',
            'code' => 'required|between:2,10',
        ]);

        $fields = $request->only('name', 'code');
        (new Course($fields))->save();

        return redirect()
            ->route('courses.index')
            ->with('success', 'Curso criado cadastrado com sucesso');
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
    
    public function destroy($id)
    {
        
        Course::destroy($id);
        return redirect()
            ->route('courses.index')
            ->with('success', 'Curso deletado com sucesso.');
    }
}
