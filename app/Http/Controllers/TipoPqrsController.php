<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TipoPqrsController extends Controller
{
    public function create(){
        return view('tipopqrs');
    }
}
