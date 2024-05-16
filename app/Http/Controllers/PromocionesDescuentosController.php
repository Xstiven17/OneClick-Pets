<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PromocionesDescuentosController extends Controller
{
    public function create(){
        return view('promocionesdescuentos');
    }
}
