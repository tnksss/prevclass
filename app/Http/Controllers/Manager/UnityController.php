<?php

namespace App\Http\Controllers\Manager;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Unity;
use App\Models\City;
use App\Models\SchoolYear;
use App\Models\Discipline;
use App\Models\Supply;
use App\Models\Users\User;
use Auth;

class UnityController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:manager');
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
            'code'      => 'unique|required|numeric|between:3,12',
            'name'      => 'required|between:3,100',
            'address'   => 'required|max:256', 
            'number'    => 'required|min:1|max:5',
            'phone'     => 'required|min:8|max:12',
            'email'     => 'required|email',
            'city_id'   => 'required',
        ]);

        $fields = $request->only('code','name', 'address','number','phone','email','city_id');
        Unity::find($id)->fill($fields)->save();

        return redirect()
            ->route('unities.show', ['id' => $id])
            ->with('success', 'Unidade atualizada com sucesso.');
    }
    public function show($id)
    {
            
        $unity = Unity::find($id);
        
        
        return view('manager.unity.show', [
            'unity' => $unity
        ]);
    }
    
    public function supplies()
    {
        $unity = Auth::guard('manager')->user()->unity;
        $supplies = $unity->supplies;
        return view('manager.unity.supply.show', 
            compact(['unity','supplies'])
        );
    }
    public function createSupply()
    {
        $unity = Auth::guard('manager')->user()->unity;
        $teachers = User::all();
        $disciplines = Discipline::all();
        return view('manager.unity.supply.create', 
            compact(['unity',
                     'teachers',
                     'disciplines'])
        );
        $fields = $request->only('user_id','discipline_id');
    }
    public function storeSupply(Request $request, Unity $unity)
    {
        $this->validate($request,[
            'user_id' => 'required',
            'discipline_id' => 'required'
        ]);
        $fields = $request->only('user_id','discipline_id');
        $fields['unity_id'] = $unity->id;

        dd($unity->id);
        if((new Supply($fields))->save())
            return redirect()
                ->route('supplies.show')
                ->with('success','Suprimento adicionado com sucesso');
        
        return redirect()
            ->back()
            ->with('error','reveja os campos');
    }
}
