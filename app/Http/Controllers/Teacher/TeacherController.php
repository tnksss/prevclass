<?php

namespace App\Http\Controllers\Teacher;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Supply;
use App\Models\Unity;
use App\Models\Concept;

use Auth;

class TeacherController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');   
    } 
    public function index()
    {
        $teacher = Auth::user();
        
        $concepts['total'] = Concept::where('user_id',$teacher->id)->count();
        $concepts['filled'] = Concept::where('user_id',$teacher->id)->where('filled',1)->count();
        
                        
        return view('teacher.home',compact('teacher','grades'));
    }
    public function profile()
    {
        $teacher = Auth::user();
        return view('teacher.profile',compact('teacher'));
    }
    public function profileUpdate(Request $request)
    {
        $this->validate($request,[
            'name'      => 'required|between:3,50',
            'email'     => 'required|email',
            'avatar'    => 'image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);
        $teacher = Auth::user();
        $data = $request->all();

        if ($data['password'] != null)
            $data['password'] = bcrypt($data['password']);
        else
            unset($data['password']);

        
        $data['avatar'] = $teacher->avatar;
        if ($request->hasFile('avatar') && $request->file('avatar')->isValid())
        {      
               
            $avatarName = $teacher->id.'_avatar'.time().'.'.request()->avatar->getClientOriginalExtension();
            $data['avatar'] = $avatarName;
            $upload = $request->avatar->storeAs('teachers', $avatarName);
            if (!$upload)
            {
                return redirect()
                            ->back()
                            ->with('error', 'Falhou ao fazer upload de imagem.');    
            }
            
        }
        
        $teacher->fill($data);
        $teacher->avatar = $data['avatar'];
        

        if ($teacher->save())
                return redirect()
                            ->route('teacher.profile')
                            ->with('success', 'Sucesso ao atualizar');
        return redirect()
                        ->back()
                        ->with('error', 'Falhou ao atualizar o perfil');
    }

}
