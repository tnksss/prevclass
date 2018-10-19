<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Unity;
use App\Models\City;
use App\Models\Users\Manager;

class UnityController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    
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

    public function createManager($id)
    {
        
        $unity = Unity::find($id);
        return view('admin.unity.create_manager', [
            'unity' => $unity
        ]);
    }
    public function managerStore(Request $request)
    {
        // $this->validate($request,[
        //     'name' => 'required|between:2,100',
        //     'email' => 'required',
        //     'password' => 'required|min:6',
        //     'unity_id' => 'required'
        // ]); 
        
        $fields = $request->only('name', 'email', 'password', 'unity_id');
        $validate = validator($fields, Manager::RULES, Manager::MESSAGES);

        $fields['password'] = bcrypt($fields['password']);
        if ($validate->fails())
            return redirect()
                ->back()
                ->withErrors($validate)
                ->withInput();

        (new Manager($fields))->save();
        return redirect()
            ->route('unities.index')
            ->with('success', 'Secretário adicionado com sucesso');
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
        $courses = $unity->courses;
        
        
        return view('admin.unity.show', [
            'unity' => $unity,
            'courses' => $courses
        ]);
    }
    public function destroy($id)
    {
        
        Unity::destroy($id);
        return redirect()
            ->route('unities.index')
            ->with('success', 'Unidade deletada com sucesso.');
    }
    
}
