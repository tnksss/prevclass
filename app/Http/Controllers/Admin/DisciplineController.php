<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Discipline;

class DisciplineController extends Controller
{
    public function index(){

        $disciplines = Discipline::all();
        return view('admin.discipline.index',compact('disciplines'));
    }

    public function create()
    {
        return view('admin.discipline.create', [
            'discipline' => new Discipline()
        ]);
    }

    
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|between:2,100',
            'code' => 'required|between:2,10',
        ]);

        $fields = $request->only('name', 'code');
        (new Discipline($fields))->save();

        return redirect()
            ->route('disciplines.index')
            ->with('success', 'Disciplina criada cadastrado com sucesso');
    }

    public function edit($id)
    {
        return view('admin.discipline.edit', [
            'discipline' => Discipline::find($id)
        ]);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required|between:2,100',
            'code' => 'required|betwwen:2,10',
        ]);

        $fields = $request->only('name', 'code');
        Discipline::find($id)->fill($fields)->save();

        return redirect()
            ->route('disciplines.index')
            ->with('success', 'Disciplina atualizada com sucesso.');
    }
    
    public function destroy($id)
    {
        
        Discipline::destroy($id);
        return redirect()
            ->route('disciplines.index')
            ->with('success', 'Disciplina deletada com sucesso.');
    }}
