<?php

namespace App\Http\Controllers;
use App\Models\Empresa;
use Illuminate\Http\Request;

class EmpresaController extends Controller
{
    public function create(){
        return view('Empresas/empresaIndex');
    }

    public function store(Request $request)
    {
        $request->validate([
            'razon_social' => 'required|string|max:255',
            'nit' => 'required|string|max:255',
            'objeto_social' => 'required|string',
        ]);

        Empresa::create($request->all());

        return redirect()->route('Empresas/empresaIndex')->with('success', 'Empresa creada exitosamente.');
    }
}
