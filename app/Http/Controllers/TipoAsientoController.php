<?php

namespace App\Http\Controllers;
use App\Models\TipoAsiento;
use Illuminate\Http\Request;

class TipoAsientoController extends Controller
{
    public function index(){
        $tiposAsientos = TipoAsiento::all();
        return view('tiposAsientos',compact ('tiposAsientos')); 
    }

    public function create() {
        return view('agregarAsiento');
    }

    public function store(Request $request){
        $asientos= new TipoAsiento();
        $asientos->descripcion=$request->input("descripcion");
        $asientos->precio=$request->input("precio");
        $asientos->estado=$request->input("estado");
        
        $asientos->save(); 
        return view("tiposAsientos");
    }
}
