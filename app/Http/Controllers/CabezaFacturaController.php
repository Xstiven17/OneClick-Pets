<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CabezaFacturaController extends Controller
{
    public function create(){
        return view('cabezafactura');
    }
}
