<?php

namespace App\Http\Controllers\Manager;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Student;

class StudentController extends Controller
{
    public function index(){

        $students = Student::all();
        return view('manager.student.index',compact('students'));
    }

    public function create()
    {
        return view('manager.student.create', [
            'student' => new Student()
        ]);
    }

    
    public function store(Request $request)
    {
        $this->validate($request, [
            'name'      => 'required|between:2,100',
            'cgm'       => 'required|between:2,10',
            'avatar'    => 'image',
        ]);

        $fields = $request->only('name', 'cgm','avatar');
        (new Student($fields))->save();
            return redirect()
                ->route('students.index')
                ->with('success', 'Aluno cadastrado com sucesso');
    }

    public function edit($id)
    {
        return view('manager.student.edit', [
            'student' => Student::find($id)
        ]);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required|between:2,100',
            'cgm' => 'required|betwwen:2,10',
        ]);

        $fields = $request->only('name', 'cgm');
        Student::find($id)->fill($fields)->save();

        return redirect()
            ->route('students.index')
            ->with('success', 'Aluno atualizado com sucesso.');
    }
    
    public function destroy($id)
    {
        
        Student::destroy($id);
        return redirect()
            ->route('students.index')
            ->with('success', 'Aluno deletado com sucesso.');
    }}
