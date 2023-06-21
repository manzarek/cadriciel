<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EtudiantController;
use App\Http\Controllers\FilePostController;
use App\Http\Controllers\ForumPostController;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\LocalizationController;

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


Route::get('registration', [EtudiantController::class, 'create'])->name('registration');
Route::post('registration', [EtudiantController::class, 'store']);

Route::get('login', [CustomAuthController::class, 'index'])->name('login');
Route::post('login', [CustomAuthController::class, 'authentication'])->name('login.authentication');
Route::get('logout', [CustomAuthController::class, 'logout'])->name('logout');

Route::get('/lang/{locale}', [LocalizationController::class, 'index'])->name('lang');

Route::get('college', [EtudiantController::class, 'index'])->name('college.index')->middleware('auth');

Route::get('forum', [ForumPostController::class, 'index'])->name('forum.index')->middleware('auth');
Route::get('forum/{forumPost}', [ForumPostController::class, 'show'])->name('forum.show')->middleware('auth');
Route::get('forum-create', [ForumPostController::class, 'create'])->name('forum.create')->middleware('auth');
Route::post('forum-create', [ForumPostController::class, 'store'])->middleware('auth');
Route::get('forum-edit/{forumPost}', [ForumPostController::class, 'edit'])->name('forum.edit')->middleware('auth');
Route::put('forum-edit/{forumPost}', [ForumPostController::class, 'update'])->middleware('auth');
Route::delete('forum/{forumPost}', [ForumPostController::class, 'destroy'])->middleware('auth');

Route::get('files', [FilePostController::class, 'index'])->name('files.index')->middleware('auth');
Route::get('files/{filePost}', [FilePostController::class, 'show'])->name('files.show')->middleware('auth');
Route::get('files-create', [FilePostController::class, 'create'])->name('files.create')->middleware('auth');
Route::post('files-create', [FilePostController::class, 'store'])->middleware('auth');
Route::get('files-edit/{filePost}', [FilePostController::class, 'edit'])->name('files.edit')->middleware('auth');
Route::put('files-edit/{filePost}', [FilePostController::class, 'update'])->middleware('auth');
Route::delete('files/{filePost}', [FilePostController::class, 'destroy'])->middleware('auth');
