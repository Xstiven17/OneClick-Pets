<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnalisisClienteController;
use App\Http\Controllers\CabezaFacturaController;
use App\Http\Controllers\EmpresaController;
use App\Http\Controllers\MedidasSeguridadController;
use App\Http\Controllers\SistemaPagoController;
use App\Http\Controllers\TipoDocumentoController;
use App\Http\Controllers\VerificacionPedidoController;

Route::get('/', function () {
    return view('welcome');
});

//Rutas Santiago
Route::get('analisis-cliente',[AnalisisClienteController::class,'create']);
Route::post('analisis-cliente',[AnalisisClienteController::class,'store']);
//Rutas Santiago

//Rutas Stiven
Route::get('cabeza-factura',[CabezaFacturaController::class,'create']);

Route::get('empresa',[EmpresaController::class,'create']);

Route::get('seguridad', [MedidasSeguridadController::class,'create']);

Route::get('sistema-pago', [SistemaPagoController::class,'create']);

Route::get('tipo-documento', [TipoDocumentoController::class,'create']);

Route::get('verificacion-pedido', [VerificacionPedidoController::class,'create']);
//Rutas Stiven



//Rutas Jasvi

//Rutas Jasvi


//Rutas Julian

//Rutas Julian

