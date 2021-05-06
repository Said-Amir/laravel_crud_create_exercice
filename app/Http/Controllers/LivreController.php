<?php

namespace App\Http\Controllers;

use App\Models\Livre;
use Illuminate\Http\Request;

class LivreController extends Controller
{
    public function index(){
        $livres = Livre::all();
        return view('backoffice.livres.all', compact('livres'));
    }

    public function destroy($id){
        $livre = Livre::find($id);
        $livre->delete();
        
        return redirect()->back();
    }

    public function edit($id){
        $livre = Livre::find($id);
        return view('backoffice.livres.edit', compact('livre'));
    }

    public function update($id, Request $request){
        $livre = Livre::find($id);
        $livre->titre = $request->titre;
        $livre->auteur = $request->auteur;
        $livre->date = $request->date;
        $livre->nbPages = $request->nbPages;
        $livre->mobile = $request->mobile;
        $livre->updated_at = now();

        $livre->save();
        return redirect()->route('livre');
    }

    public function create(){
        return view('backoffice.users.create');
    }

    public function store(Request $request){
        $livre = new Livre();
        $livre->titre = $request->titre;
        $livre->auteur = $request->auteur;
        $livre->date = $request->date;
        $livre->nbPages = $request->nbPages;
        $livre->mobile = $request->mobile;

        $livre->save();
        return redirect()->route('livre');
    }
}
