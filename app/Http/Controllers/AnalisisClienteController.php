<?php

namespace App\Http\Controllers;

use App\Models\AnalisisCliente;
use Illuminate\Http\Request;

class AnalisisClienteController extends Controller
{
    //Recupera las entradas de la base de datos y envia los datos a analis_cliente.index
   // public function index(){
   //     $analisis_cliente = Analisis_cliente::all();
   //     return view('index.blade.php', compact('analisis_cliente'));
    //}

    public function index(){
        $analisis_cliente = AnalisisCliente::all();
        return view('analisis_cliente/analisis_cliente', compact('analisis_cliente'));
    }
//create a new Analisis_cliente


    public function create(){
        return view('analisis_cliente/analisis_cliente');
    }
//store para recibir formulario del cliente
    public function store(Request $request){
        $analisis_clientes = new AnalisisCliente();
        $analisis_clientes->Usuario = $request->Usuario;
        $analisis_clientes->Tiempo_online = $request->Tiempo_online;
        $analisis_clientes->Tiempo_offline = $request->Tiempo_offline;
        $analisis_clientes->save(); 
//direccion despues de guardado
        return redirect()->route('analisis-cliente.create');
    }

    public function show($id){
        $analisis_cliente = AnalisisCliente::find($id);
        return view('analisis_cliente/show_analisis_cliente', compact('analisis_cliente'));
    }

    public function edit($id){
        $analisis_cliente = AnalisisCliente::find($id);
        return view('analisis_cliente/edit_analisis_cliente', compact('analisis_cliente'));
    }

    public function update(Request $request, AnalisisCliente $analisisCliente){
        $analisisCliente->update($request->all());
        return redirect()->route('analisis-cliente.store');

    }

    public function destroy(AnalisisCliente $analisisCliente){
        $analisisCliente->delete();
        return redirect()->route('analisis_cliente.create');
    }

}