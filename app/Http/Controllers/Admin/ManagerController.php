<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Unity;
use App\Models\Users\Manager;

class ManagerController extends Controller
{
    public function create($id)
    {   
        $unity = Unity::find($id);
        
        return view('admin.manager.create', [
            'unity' => $unity
        ]);
    }
    public function store(Request $request, $id)
    {   
        
        $fields = $request->only('name', 'email', 'cpf');
        $validate = validator($fields, Manager::RULES, Manager::MESSAGES);
        $password = str_replace(['.','-'],"",$fields['cpf']);
        $fields['password'] = bcrypt($password);
        $fields['unity_id'] = $id;
        if ($validate->fails())
            return redirect()
                ->back()
                ->withErrors($validate)
                ->withInput();

        (new Manager($fields))->save();
        return redirect()
            ->route('unities.show', $id)
            ->with('success', 'Secretário adicionado com sucesso');
    }
    public function edit($unity, $id)
    {
        $manager = Manager::find($id);
        return view('admin.manager.edit',[
            'manager' => $manager
        ]);
    }
    public function update(Request $request, $unity, $id)
    {
        $this->validate($request, Manager::RULES);
        $fields = $request->only('name', 'email', 'cpf');
        $password = str_replace(['.','-'],"",$fields['cpf']);
        $fields['password'] = bcrypt($password);
        $fields['unity_id'] = $unity;
        Manager::find($id)->fill($fields)->save();
        return redirect()
                        ->route('unities.show',$unity)
                        ->with('success','Secretário atualizado com sucesso!');
    }
}
