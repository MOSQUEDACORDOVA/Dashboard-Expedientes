<?php

use App\Http\Controllers\ExpedienteController;
use App\Http\Controllers\Facturacion;
use App\Http\Controllers\MostrarPdf;
use App\Http\Controllers\NuevoExpediente;
use App\Http\Controllers\Usuarios;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();
//Language Translation
Route::get('index/{locale}', [App\Http\Controllers\HomeController::class, 'lang']);

Route::get('/', [App\Http\Controllers\HomeController::class, 'root'])->name('root');

//Update User Details
Route::post('/update-profile/{id}', [App\Http\Controllers\HomeController::class, 'updateProfile'])->name('updateProfile');
Route::post('/update-password/{id}', [App\Http\Controllers\HomeController::class, 'updatePassword'])->name('updatePassword');
// ESTO HACE QUE SE LISTE TODAS LAS CLASES
//Route::get('{any}', [App\Http\Controllers\HomeController::class, 'index'])->name('index');


Route::get('/test-page', [App\Http\Controllers\TestController::class, 'test'])
    ->middleware('auth')
    ->name('test-page');


Route::get('/usuarios', [App\Http\Controllers\Usuarios::class, 'index'])->name('usuarios');


Route::group(['middleware' => ['auth']], function () {

    Route::get('/expedientes', [ExpedienteController::class, 'index'])->name('expedientes.index');//rutas accesibles solo para clientes

    Route::get('/usuario-lista', [Usuarios::class, 'mostrarData'])->name('usuario-lista');

    Route::get('/usuario/{id}/edit', [Usuarios::class, 'edit'])->name('usuario.edit');

    Route::put('/usuario/{id}', [Usuarios::class, 'update'])->name('usuario.update');

    Route::delete('/usuario/{id}', [Usuarios::class, 'destroy'])->name('usuario.destroy');

    Route::get('/crear-usuario', [Usuarios::class, 'createVista'])->name('crear-usuario');

    Route::post('/usuario', [Usuarios::class, 'store'])->name('usuario-crear');

    //Editar Expediente

    Route::get('/editar-expedientes/{id}', [ExpedienteController::class, 'edit'])->name('expedientes.edit');

    Route::put('/expedientes/{id}', [ExpedienteController::class, 'update'])->name('expedientes.update');


    //PDF
    Route::get('/ver-pdf', [MostrarPdf::class, 'generarPDF']);
    Route::get('/reporte-expediente/{id}', [ExpedienteController::class, 'Reportepdf'])->name('expediente.pdf');

    //EliminarExpediente

    Route::delete('/eliminar-expediente/{id}', [ExpedienteController::class, 'delete'])->name('eliminar-expediente');


    Route::get('/lista-expediente', [ExpedienteController::class, 'mostrar'])->name('mostrar');

    Route::get('/nuevo-expediente', [ExpedienteController::class, 'newExpediente'])->name('nuevo-expediente');

    Route::post('/nuevo-expediente', [ExpedienteController::class, 'store'])->name('expedientes.store');


    Route::get('/lista-facturacion' , [Facturacion::class, 'index'] )-> name('facturacion.index');


    //Facturacion

    Route::get('/nueva-facturacion', [Facturacion::class, 'formVista'])->name('nueva-facturacion');

    Route::post('/nueva-facturacion', [Facturacion::class, 'store'])->name('facturacion.store');

});









