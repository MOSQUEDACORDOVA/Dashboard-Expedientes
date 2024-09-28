<?php

namespace App\Http\Controllers;

use App\Models\Expediente;
use Illuminate\Http\Request;

class Facturacion extends Controller
{
    public function index()
    {
        return view('lista-facturacion');
    }


    public function formVista(){
       // return view('formulario-facturacion')  ;

        $traerIds = Expediente::pluck('traze_id', 'id'); // Asumiendo que 'trazer_id' es el campo que necesitas y 'id' es el identificador

        return view('formulario-facturacion', compact('traerIds'));
    }

    public function store(Request $request){

        dd($request->all());
    }



}
