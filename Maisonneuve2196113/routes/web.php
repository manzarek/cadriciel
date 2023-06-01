<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EtudiantController;

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

Route::get('college', [EtudiantController::class, 'index'])->name('college.index');
Route::get('college/{etudiant}', [EtudiantController::class, 'show'])->name('college.show');
Route::get('college-create', [EtudiantController::class, 'create'])->name('college.create');
Route::post('college-create', [EtudiantController::class, 'store']);
Route::get('college-edit/{etudiant}', [EtudiantController::class, 'edit'])->name('college.edit');
Route::put('college-edit/{etudiant}', [EtudiantController::class, 'update']);
Route::delete('college/{etudiant}', [EtudiantController::class, 'destroy']);