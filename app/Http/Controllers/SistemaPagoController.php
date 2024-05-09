<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SistemaPagoController extends Controller
{
    public function create(){
        return view('sistemapago');
    }
}
