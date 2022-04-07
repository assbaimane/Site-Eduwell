<?php

namespace App\Http\Controllers;

use App\Models\Titre;
use Illuminate\Http\Request;

class TitreController extends Controller
{
    //
    public function index()
    {
        $titres = Titre::all();
        return view("/back/titres/all",compact("titres"));
    }
    public function edit($id)
    {
        $titre = Titre::find($id);
        return view("/back/titres/edit",compact("titre"));
    }
    public function update($id, Request $request)
    {
        $titre = Titre::find($id);
        $request->validate([
         'titre'=> 'required',
         'soustitre'=> 'required',
         'description'=> 'required',
        ]); // update_validated_anchor;
        $titre->titre = $request->titre;
        $titre->soustitre = $request->soustitre;
        $titre->description = $request->description;
        $titre->save(); // update_anchor
        return redirect()->route("titre.index")->with('message', "Successful update !");
    }
}
