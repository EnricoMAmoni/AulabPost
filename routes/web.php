<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ArticleController;

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

Route::get('/', [PublicController::class, 'home'])->name('home');

// rotte per articoli

Route::get('/articles/create', [ArticleController::class, 'create'])->name('articles.create');
Route::post('/articles/store', [ArticleController::class, 'store'])->name('articles.store');
Route::get('/articles/{article}/show', [ArticleController::class, 'show'])->name('articles.show');
Route::get('/articles/{category}/indexCategory', [ArticleController::class, 'articlesForCategory'])->name('articles.category');
Route::get('/articles/{user}/indexUser', [ArticleController::class, 'articlesForUser'])->name('articles.user');
Route::get('/work-with-us', [PublicController::class, 'workWithUs'])->name('work.with.us');

