<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User_DomicilioController;
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

Route::get('/usuarios_domicilios', [User_DomicilioController::class, 'mostrarDatos'])->name('ruta');
