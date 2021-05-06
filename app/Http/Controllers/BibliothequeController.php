<?php

namespace App\Http\Controllers;

use App\Models\Bibliotheque;
use Illuminate\Http\Request;

class BibliothequeController extends Controller
{
    public function index(){
        $bibliotheques = Bibliotheque::all();
        return view('backoffice.bibliotheques.all', compact('bibliotheques'));
    }

    public function destroy($id){
        $bibliotheque = Bibliotheque::find($id);
        $bibliotheque->delete();
        
        return redirect()->back();
    }

    public function edit($id){
        $bibliotheque = Bibliotheque::find($id);
        return view('backoffice.bibliotheques.edit', compact('bibliotheque'));
    }

    public function update($id, Request $request){
        $bibliotheque = Bibliotheque::find($id);
        $bibliotheque->nom = $request->nom;
        $bibliotheque->adresse = $request->adresse;
        $bibliotheque->numTel = $request->numTel;
        $bibliotheque->updated_at = now();

        $bibliotheque->save();
        return redirect()->route('bibliotheque');
    }

    public function create(){
        return view('backoffice.bibliotheques.create');
    }

    public function store(Request $request){
        $bibliotheque = new Bibliotheque();
        $bibliotheque->nom = $request->nom;
        $bibliotheque->adresse = $request->adresse;
        $bibliotheque->numTel = $request->numTel;

        $bibliotheque->save();
        return redirect()->route('bibliotheque');
    }
}