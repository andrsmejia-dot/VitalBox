<?php

//Se importan los controladores
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UsuariosController;
use Illuminate\Support\Facades\Route;

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

//Creando la conexión con el controlador de la página principal
Route::get('/', HomeController::class);
Route::resource('/usuarios', 'App\Http\Controllers\UsuariosController');