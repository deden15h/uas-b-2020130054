<?php

use App\Http\Controllers\AppController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\OrderController;
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

//Route::get('/', function () {return view('index');});

Route::get('/', [AppController::class, 'index']);

Route::resource('items', ItemController::class);

Route::get('/order', [OrderController::class,'order'])->name('order.order');

Route::get('/order', [OrderController::class,'createOrder'])->name('order.createOrder');
