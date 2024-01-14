<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CandidatoController;
use App\Http\Controllers\VotacaoController;
use App\Http\Controllers\CategoriaController;

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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home') ;




Route::get('/candidato',         [CandidatoController::class, 'index']) ->name('candidato.index') ->middleware('auth');
Route::get('/candidato/create', [CandidatoController::class, 'create']) ->name('candidato.create') ->middleware('auth');
Route::post('/candidato/create', [CandidatoController::class, 'store'])->name('candidato.store')->middleware('auth');




Route::get('/votacao/create', [VotacaoController::class, 'create']) ->name('votacao.create') ->middleware('auth');



Route::get('/categoria',         [CategoriaController::class, 'index']) ->name('categoria.index') ->middleware('auth');
Route::get('/categoria/create',  [CategoriaController::class, 'create']) ->name('categoria.create') ->middleware('auth');
Route::post('/categoria/create', [CategoriaController::class, 'store'])->name('categoria.store')->middleware('auth');