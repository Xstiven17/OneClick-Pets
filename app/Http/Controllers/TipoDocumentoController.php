<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TipoDocumentoController extends Controller
{
    public function create(){
        return view('tipodocumento');
    }
}
