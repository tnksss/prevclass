<?php

namespace App\Http\Controllers\Manager;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Users\User;

class TeacherController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:manager');   
    }
    public function index()
    {
        $teachers = User::orderBy('name')->paginate(10);
        return view('manager.teacher.index',compact('teachers'));
    }
    public function create()
    {
        return view('manager.teacher.create',[
            'teacher' => new User()
        ]);
    }
    public function store(Request $request)
    {
        $fields = $request->only('name','cpf','email');
        
        $validate = validator($fields,User::RULES,User::MESSAGES);
        if ($validate->fails())
            return redirect()
                        ->back()
                        ->withErrors($validate)
                        ->withInput();
        $fields['password'] = bcrypt($fields['cpf']);
        (new User($fields))->save();
            return redirect()
                ->route('teachers.index')
                ->with('success', 'Professor cadastrado com sucesso');
    }
    public function edit($id)
    {
        return view('manager.teacher.edit',[
            'teacher' => User::find($id)
        ]);
    }
    public function update(Request $request, $id)
    {
        $fields = $request->only('name', 'cpf', 'email');
        
        $validate = validator($fields,User::RULES,User::MESSAGES);
        if ($validate->fails())
            return redirect()
                        ->back()
                        ->withErrors($validate)
                        ->withInput();
        $fields['password'] = bcrypt($fields['cpf']);
        User::find($id)->fill($fields)->save();

        return redirect()
            ->route('teachers.index')
            ->with('success', 'Professor atualizado com sucesso.');
    }
    public function destroy($id)
    {
        if(User::find($id)->supplies->count() > 0)
            return redirect()
                        ->back()
                        ->with('error', 'Não foi possível remover, o professor possui suprimento ativo neste período');
        
        User::destroy($id);
        return redirect()
                    ->route('teachers.index')
                    ->with('success', 'Professor removido com sucesso');
    }
    public function show($id)
    {
        $teacher = User::find($id);
        $supplies = $teacher->supplies;
        
        return view ('manager.teacher.show',[
                    'teacher' => $teacher,
                    'supplies' => $supplies
        ]);
    }
}