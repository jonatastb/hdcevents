<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\WelcomeController;

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

Route::get('/', [WelcomeController::class, 'index']);

Route::get('/events', [EventController::class, 'index']);

Route::get('/events/create', [EventController::class, 'create']);

Route::get('/contato', [ContactController::class, 'index']);

Route::get('/produtos', [ProductsController::class, 'index']);

Route::get('/produto/{id?}', [ProductsController::class, 'productId']);