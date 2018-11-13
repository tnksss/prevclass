<?php

namespace App\Http\Controllers\Teacher;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Concept;

class ConceptController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function update(Request $request)
    {
        $concept = Concept::find($request->concept_id);
        
        for ($i=1; $i <= 8; $i++) { 
            if($request['criterion_'.$i] == null)
                $request['criterion_'.$i] = 0;
            else
                $request['criterion_'.$i] = 1;
        }
        
        
        
        $fields = $request->all();
        
        $concept->update($fields);
        $concept->filled = 1;
        $concept->save();
        return redirect()
                    ->back()
                    ->with('success','Aluno avaliado com sucesso');
    }
}
