<?php

use App\Http\Controllers\ArticleController;
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

Route::get('/articles', [ArticleController::class, 'index'])->name('articles.showAll');
Route::post('/articles',[ArticleController::class, 'store']);

Route::get('/myarticles', [ArticleController::class, 'userIndex']);

Route::get('/articles/create', [ArticleController::class, 'create']);


Route::get('/articles/{article}',[ArticleController::class, 'show'])->name('articles.show');
Route::delete('/articles/{article}', [ArticleController::class, 'delete']);
Route::put('/articles/{article}', [ArticleController::class, 'update']);

Route::get('/articles/{article}/edit', [ArticleController::class, 'edit']);






Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])
->name('home')
->middleware('auth');

