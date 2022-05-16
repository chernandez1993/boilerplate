<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CharacterController;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Characters
Route::get('/characters', [CharacterController::class, 'index'])->name('character.index');
Route::get('/characters/edit/{id}', [CharacterController::class, 'edit'])->name('character.edit');

Route::post('/characters/edit/{id}', [CharacterController::class, 'update'])->name('character.update'); //TODO

//Extra
Route::post('/characters/destroy/{id}', [CharacterController::class, 'destroy'])->name('character.delete');

Route::get('/characters/create', [CharacterController::class, 'create'])->name('character.create');
Route::post('/characters/store', [CharacterController::class, 'store'])->name('character.store');
