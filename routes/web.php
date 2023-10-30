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

Route::get('/events/events', [EventController::class, 'index']);

// Route::get('/events/event/{id}', [EventController::class, 'show']);

Route::get('/events/new', [EventController::class, 'new']);

Route::post('/events/create', [EventController::class, 'store']);

Route::get('/contato', [ContactController::class, 'index']);
