<?php

namespace App\Http\Controllers;

use App\Models\Animaux;
use Illuminate\Http\Request;

class AnimauxController extends Controller
{
    public function index(){
        $allAnimaux = Animaux::all();
        return view('animal', compact('allAnimaux'));
    }
    public function destroy($id){
        $destroy = Animaux::find($id);
        $destroy->delete();
        return redirect()->back();
    }
    public function show($id){
        $id_show = Animaux::find($id);
        return view('editAnimal', compact('id_show'));
    }
    public function update(Request $request, $id){
        $editable = Animaux::find($id);
        $editable->espece = $request->espece;
        $editable->age = $request->age;
        $editable->save();
        return redirect()->back();
    }
}
