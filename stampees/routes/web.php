<?php

use App\Http\Controllers\StampeesController;
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

Route::get('/', [StampeesController::class, 'index']);
Route::get('/catalogue', [StampeesController::class, 'catalogue']);
Route::get('/inscription', [StampeesController::class, 'inscription']);
Route::get('/about', [StampeesController::class, 'about']);
Route::post('/inscription', [StampeesController::class, 'inscriptionForm']);
