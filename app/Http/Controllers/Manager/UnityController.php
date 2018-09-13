<?php

namespace App\Http\Controllers\Manager;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Unity;
use App\Models\City;

class UnityController extends Controller
{
    public function index(){

        $unities = Unity::all();
        return view('admin.unity.index',compact('unities'));
    }

    public function create()
    {
        
        $cities = City::all();
        return view('admin.unity.create', [
            'unity' => new Unity(),
            'cities' => $cities
        ]);
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|between:2,100',
            'address' => 'required|between:2,200',
            'city_id',
            'number',
            'phone' => 'required',
            'email' => 'required',

        ]);

        $fields = $request->only('name', 'address','number','phone','email','city_id');
        (new Unity($fields))->save();

        return redirect()
            ->route('unities.index')
            ->with('success', 'Unidade criada cadastrado com sucesso');
    }

    public function edit($id)
    {
        $cities = City::all();

        return view('admin.unity.edit', [
            'unity' => Unity::find($id),
            'cities' => $cities
        ]);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required|between:2,100',
            'address' => 'required',
            'city_id',
            'number',
            'phone',
            'email',
        ]);

        $fields = $request->only('name', 'address','number','phone','email','city_id');
        Unity::find($id)->fill($fields)->save();

        return redirect()
            ->route('unities.show', ['id' => $id])
            ->with('success', 'Unidade atualizada com sucesso.');
    }
    public function show($id)
    {
            
        $unity = Unity::find($id);
        
        // $employees = Employee::orderBy('id')->paginate(5);
        
        return view('admin.unity.show', [
            'unity' => $unity
        ]);
    }
    public function destroy($id)
    {
        
        Department::destroy($id);
        return redirect()
            ->route('unities.index')
            ->with('success', 'Unidade deletada com sucesso.');
    }
}
