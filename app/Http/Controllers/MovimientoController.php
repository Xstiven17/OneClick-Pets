<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MovimientoController extends Controller
{
    public function create(){
        return view('movimiento');
    }
}

