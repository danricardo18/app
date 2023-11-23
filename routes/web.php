<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AfiliadoController;
use App\Http\Controllers\DepositoController;
use App\Http\Controllers\RetiroController;
use App\Http\Controllers\EmpleadoController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

route::get('/afiliado/{empleado}',[AfiliadoController::class,'index']);
route::get('/afiliado/{empleado}/create', [AfiliadoController::class, 'create']);

route::get('/deposito/{empleado}/{idafi}/{nafi}',[DepositoController::class,'index']);
route::get('/deposito/create/{emp}/{afi}/{nafi}',[DepositoController::class,'create']);

route::get('/retiro/{empleado}/{idafi}/{nafi}',[RetiroController::class,'index']);
route::get('/retiro/create/{emp}/{afi}/{nafi}',[RetiroController::class,'create']);

Route::resource('/empleado','App\Http\Controllers\EmpleadoController');
Route::resource('/afiliado','App\Http\Controllers\AfiliadoController');
Route::resource('/retiro','App\Http\Controllers\RetiroController');
Route::resource('/deposito','App\Http\Controllers\DepositoController');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
