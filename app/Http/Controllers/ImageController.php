<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function index(){
        $images = Image::all();
        return view('backoffice.images.all', compact('images'));
    }

    public function destroy($id){
        $image = Image::find($id);
        $image->delete();
        
        return redirect()->back();
    }

    public function edit($id){
        $image = Image::find($id);
        return view('backoffice.images.edit', compact('image'));
    }

    public function update($id, Request $request){
        $image = Image::find($id);
        $image->image = $request->image;
        $image->description = $request->description;
        $image->updated_at = now();

        $image->save();
        return redirect()->route('image');
    }

    public function create(){
        return view('backoffice.images.create');
    }

    public function store(Request $request){
        $image = new Image();
        $image->image = $request->image;
        $image->description = $request->description;

        $image->save();
        return redirect()->route('image');
    }
}