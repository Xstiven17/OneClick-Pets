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
        $analisis_clientes = AnalisisCliente::orderBy('id')->get();
        return view('analisis_cliente.index', compact('analisis_clientes'));
    }
//create a new Analisis_cliente


public function create(){
    return view('analisis_cliente.create');
}
//store para recibir formulario del cliente
    public function store(Request $request){
        $analisis_cliente = new AnalisisCliente();
        $analisis_cliente->Usuario = $request->Usuario;
        $analisis_cliente->Tiempo_online = $request->Tiempo_online;
        $analisis_cliente->Tiempo_offline = $request->Tiempo_offline;
        $analisis_cliente->save();
//direccion despues de guardado
        return redirect()->route('analisis-cliente.create');
    }
//funcion para mostrar listado
    public function show($id){
        $analisis_cliente = AnalisisCliente::find($id);
        return view('analisis_cliente.show', compact('analisis_cliente'));
    }
//funcion para editar formulario
    public function edit($id){
        $analisis_cliente = AnalisisCliente::find($id);
        return view('analisis_cliente.edit', compact('analisis_cliente'));
    }
//funcion para actualizar formulario
    public function update(Request $request, AnalisisCliente $analisis_cliente){
        $analisis_cliente->update($request->all());
        return redirect()->route('analisis-cliente.store');

    }
//funcion para eliminar registro
    public function destroy(AnalisisCliente $analisis_cliente){
        $analisis_cliente->delete();
        return redirect()->route('analisis_cliente.create');
    }

}
