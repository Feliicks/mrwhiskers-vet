<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\clienteController;
use App\Http\Controllers\HomeController;

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
    return view('welcome');
});
Route::get('/index', function () {
    return view('index');
});
Route::get('/inicio', function () {
    return view('inicio');
});

Route::get('/registro', function () {
    return view('registroClien_te');
}); 
Route::get('/registersuccess', function () {
    return view('registersuccess');
})->name('registroSatisfactorio');
Route::post('/registro',[clienteController::class,'store'])->name('registroCli');
Route::get('logout',[LogoutController::class,'logout']);



/* Inicio de sesion usuarios del sistema */
Route::get('/login', [LoginController::class,'show']);
Route::post('/login', [LoginController::class,'login']);


##
Route::get('/home',[HomeController::class,'index']);


/* Registro de usuario del sistema */

Route::get('/register', [RegisterController::class,'show']); 
Route::post('/register', [RegisterController::class,'register']); 







Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
