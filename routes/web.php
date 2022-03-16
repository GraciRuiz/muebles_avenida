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

Route::get('/', [PublicController::class, 'index'])->name('home');
Route::get('/articles/createarticles', [ArticleController::class,'newAd'])->name('articles.create');
Route::get('/articles/indexarticles', [PublicController::class, 'indexarticles'])->name('articles.index');
Route::post('/articles/storearticles', [ArticleController::class, 'storearticles'])->name('articles.store');
Route::post('/article/images/upload', [ArticleController::class,'uploadImages'])->name('article.images.upload');
Route::get('/article/{id}', [PublicController::class,'articleDetails'])->name("articles.details");
Route::get('/articles/{name}/{id}/category', [PublicController::class,'articlesByCategory'])->name('articles.category');



