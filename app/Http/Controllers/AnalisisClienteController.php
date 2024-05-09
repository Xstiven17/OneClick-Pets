<?php

namespace App\Http\Controllers;

use App\Models\Analisis_cliente;
use Illuminate\Http\Request;

class AnalisisClienteController extends Controller
{
    //Recupera las entradas de la base de datos y envia los datos a analis_cliente.index
   // public function index(){
   //     $analisis_cliente = Analisis_cliente::all();
   //     return view('index.blade.php', compact('analisis_cliente'));
    //}
//create a new Analisis_cliente
    public function create(){
        return view('analisis_cliente');
    }
//store para recibir formulario del cliente
    public function store(Request $request){
        $analisis_cliente = new analisis_cliente();
        $analisis_cliente->Usuario = $request->Usuario;
        $analisis_cliente->Tiempo_online = $request->Tiempo_online;
        $analisis_cliente->Tiempo_offline = $request->Tiempo_offline;
        $analisis_cliente->save(); 
    }
}