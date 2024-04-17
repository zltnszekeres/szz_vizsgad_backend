<?php

namespace App\Http\Controllers;

use App\Models\Teszt;
use Illuminate\Http\Request;

class TesztController extends Controller
{
    //
    public function index(){
        $tesztek = response()->json(Teszt::all());
        return $tesztek;
    }

    public function show($id){
        $teszt = response()->json(Teszt::find($id));
        return $teszt;
    }

    public function store(Request $request){
        $teszt = new Teszt();
        $teszt->kerdes = $request->kerdes;
        $teszt->v1 = $request->v1;
        $teszt->v2 = $request->v2;
        $teszt->v3 = $request->v3;
        $teszt->v = $request->v4;


        $teszt->helyes = $request->helyes; 
        $teszt->kategoriaId = $request->kategoriaId;
        $teszt->save();
    }

    public function update(Request $request, $id){
        $teszt = Teszt::find($id);
        $teszt->kerdes = $request->kerdes;
        $teszt->v1 = $request->v1;
        $teszt->v2 = $request->v2;
        $teszt->v3 = $request->v3;
        $teszt->v = $request->v4;


        $teszt->helyes = $request->helyes; 
        $teszt->kategoriaId = $request->kategoriaId;
        $teszt->save();
        
    }

    public function destroy($id){
        $teszt = Teszt::find($id);       
         $teszt->delete();
    }
}
