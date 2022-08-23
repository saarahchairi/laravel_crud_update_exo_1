<?php

namespace App\Http\Controllers;

use App\Models\Animaux;
use Illuminate\Http\Request;

class NewAnimalController extends Controller
{
    public function index(){
        return view('newAnimal');
    }
    public function store(Request $request){
        $store = new Animaux;
        $store->espece = $request->espece;
        $store->age = $request->age;
        $store->save();
        return redirect('/');
    }
}
