<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\RegisterController;
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

Route::get('/', function () {
    return view('home');
})->middleware('auth');

Route::get('/login',[SessionsController::class,'create'])->middleware('guest')->name('register.index'); // aqui creamos las routas usando el controlador correspondiete y llamando a la funcion qu equeremos que se ejecute en este caso es create()
Route::get('/registro',[RegisterController::class,'create'])->middleware('guest')->name('login.index');
Route::post('/registro',[RegisterController::class,'store'])->name('register.store'); // aqui creamos las routas usando el controlador correspondiete y llamando a la funcion qu equeremos que se ejecute en este caso es store() con su metodo post para enviar datos atraves del formulario registro y poder validarlos
Route::post('/login',[SessionsController::class,'store'])->name('login.store'); // aqui creamos las routas usando el controlador correspondiete y llamando a la funcion qu equeremos que se ejecute en este caso es store() con su metodo post para enviar datos atraves del formulario login y poder validarlos
Route::get('/logout',[SessionsController::class.'destroy'])->middleware('auth')->name('login.destroy'); // metodo para cerrar session del usuario una vez ingresado
