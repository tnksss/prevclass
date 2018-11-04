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
        $fields = $request->all();
        
        $concept->update($fields);
        $concept->filled = 1;
        $concept->save();
        return redirect()
                    ->back()
                    ->with('success','Aluno avaliado com sucesso');
    }
}
