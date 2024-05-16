<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnalisisClienteController;
use App\Http\Controllers\CabezaFacturaController;
use App\Http\Controllers\EmpresaController;
use App\Http\Controllers\MedidasSeguridadController;
use App\Http\Controllers\SistemaPagoController;
use App\Http\Controllers\TipoDocumentoController;
use App\Http\Controllers\VerificacionPedidoController;
use App\Http\Controllers\CatalogoController; 
use App\Http\Controllers\CategoriaPedidoController; 
use App\Http\Controllers\EstadoPedidoController; 
use App\Http\Controllers\GeneroController; 
use App\Http\Controllers\MovimientoController; 
use App\Http\Controllers\PromocionesDescuentosController;
use App\Http\Controllers\TipoPqrsController;

Route::get('/', function () {
    return view('welcome');
});

//Rutas Santiago
Route::get('analisis-cliente',[AnalisisClienteController::class,'create']);
Route::post('analisis-cliente',[AnalisisClienteController::class,'store'])->name('analisis-cliente.store');
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
route::get('catalogo',[CatalogoController::class,'create']);

route::get('categoria-pedido',[CategoriaPedidoController::class,'create']);

route::get('estado-pedido',[EstadoPedidoController::class,'create']); 

route::get('genero',[GeneroController::class,'create']); 

route::get('movimiento',[MovimientoController::class,'create']); 

route::get('promociones-descuentos',[PromocionesDescuentosController::class,'create']); 

route::get('tipo-pqrs',[TipoPqrsController::class,'create']);

//Rutas Jasvi


//Rutas Julian

//Rutas Julian

