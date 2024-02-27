<?php

namespace App\Http\Controllers;

use App\Models\Vuelos;
use Illuminate\Http\Request;


class VuelosController extends Controller
{
    public function index(){
        $vuelos = Vuelos::all();

        return view('vuelos', compact('vuelos')); 
    }

    public function create(){
        return view('nuevoVuelo');
    }
    
    public function store(Request $request){
        $vuelos= new Vuelos();
        $vuelos->numeroVuelo=$request->input("numero");
        $vuelos->origen=$request->input("origen");
        $vuelos->destino=$request->input("destino");
        $vuelos->numeroAsientos=$request->input("cantidad");
        
        $vuelos->save();

        return view('vuelos');
    }
    public function edit($numeroVuelo){
        $vuelo= Vuelos::find($numeroVuelo);
        return view('editarVuelo',compact('vuelo'));
}
public function update(Request $request, $numeroVuelo){
    $vuelo= Vuelos::find($numeroVuelo);
    $vuelo->origen=$request->input("origen");
    $vuelo->destino=$request->input("destino");
    
    $vuelo->update();
    return redirect()->route('vuelos.inicio');
}
}