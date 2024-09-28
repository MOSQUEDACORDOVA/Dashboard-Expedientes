<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NuevoExpediente extends Controller
{
    public function index()
    {
        return view('nuevo-expediente');
    }
}
