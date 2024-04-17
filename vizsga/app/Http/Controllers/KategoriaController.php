<?php

namespace App\Http\Controllers;

use App\Models\Kategoria;
use Illuminate\Http\Request;

class KategoriaController extends Controller
{
    //
    public function index(){
        $kategoriak = response()->json(Kategoria::all());
        return $kategoriak;
    }

    public function show($id){
        $kategoria = response()->json(Kategoria::find($id));
        return $kategoria;
    }

    public function store(Request $request){
        $teszt = new Kategoria();
        $teszt->kategorianev = $request->kategorianev;
        
        
        $teszt->save();
    }

    public function update(Request $request, $id){
        $teszt = Kategoria::find($id);
        $teszt->kategorianev = $request->kategorianev;
       
        $teszt->save();
        
    }

    public function destroy($id){
        $kategoria = Kategoria::find($id);       
         $kategoria->delete();
    }
    
}
