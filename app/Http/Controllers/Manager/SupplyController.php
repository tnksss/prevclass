<?php

namespace App\Http\Controllers\Manager;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Grade;
use App\Models\Users\User;
use App\Models\Supply;
use Auth;
use Illuminate\Support\Facades\DB;

class SupplyController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:manager');
    }
    public function index()
    {
        $manager = Auth::guard('manager')->user();
        $supplies = Supply::join('grades','grades.id','=','supplies.grade_id')
                            ->join('courses','courses.id','=','grades.course_id')
                            ->where('courses.id',$manager->unity_id)
                            ->get();
        
        return view('manager.supplies.index',compact(
            'manager',
            'supplies'
        ));
    }

    public function find()
    {
        return view('manager.supplies.find');
    }

    public function findTeacher(Request $request)
    {
        $this->validate($request,[
            'cpf' => 'required|numeric'
        ]);
        $cpf = $request->cpf;
        $teacher = User::where('cpf',$cpf)->first();
        if ($teacher == null)
            return redirect()
                            ->back()
                            ->with('error','CPF não encontrado!');
        
        $grades = Auth::guard('manager')->user()->unity->grades->where('year','2018')->where('status','1');
        return view('manager.supplies.create',[
            'teacher'   => $teacher,
            'grades'    => $grades,
            ]);
    }

    public function store(Request $request)
    {
        $fields = $request->only('user_id','grade_id','supplyDate');
        
        $rules = [
            'grade_id' => "required|unique:supplies,grade_id,NULL,id,user_id,{$request['user_id']}",
            'supplyDate' => 'required',
        ];
        $messages = [
            'required'        => 'O campo :attribute é de preenchimento obrigatório!',
            'grade_id.unique' => 'Professor já está suprido nesta turma'
        ];
        
        $validate = validator($fields,$rules,$messages);
        if ($validate->fails())
            return redirect()
                        ->back()
                        ->withErrors($validate)
                        ->withInput();
        
        
        
        $supply = new Supply($fields);
        $supply->save();
        return redirect()
            ->route('supplies.find')
            ->with('success', 'Professor suprido com sucesso!');
    }
}
