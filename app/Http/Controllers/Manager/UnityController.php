<?php

namespace App\Http\Controllers\Manager;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Unity;
use App\Models\City;
use App\Models\SchoolYear;
use Auth;

class UnityController extends Controller
{
    public function __construct()
    {
        $manager = Auth::guard('manager')->user();
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
        
        
        return view('manager.unity.show', [
            'unity' => $unity
        ]);
    }
    public function schoolYears($id)
    {
        $unity = Unity::find($id);
        return view('manager.school-year.index', compact(['unity','manager']));
    }

    public function addSchoolYear($id)
    {
        $unity = Unity::find($id);
        
        return view('manager.school-year.create', compact('unity'));
    }
    

    public function storeSchoolYear(Request $request)
    {
        $this->validate($request,[
            'year' => 'required',
            'status' => 'required',
            'unity_id' => 'required'
        ]);
        $fields = $request->only('year', 'status', 'unity_id');
        
        (new SchoolYear($fields))->save();
        return redirect()
            ->route('school-years',$fields['unity_id'])
            ->with('success', 'Ano Letivo adicionado com sucesso');
    }
    
}
