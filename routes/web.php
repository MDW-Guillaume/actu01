<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LiveController;
use App\Http\Controllers\RubricController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\NewsletterController;

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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/article/{id}', [ArticleController::class, 'show'])->name('article.show');

Route::get('/categorie/{slug}', [RubricController::class, 'show'])->name('rubric.show');

Route::get('/live', [LiveController::class, 'show'])->name('live');

Route::get('/meteo', [MeteoController::class, 'show'])->name('meteo');

Route::get('/contact', [ContactController::class, 'show'])->name('contact');
Route::post('/contact', [ContactController::class, 'store'])->name('contact');

Route::get('/newsletter', [NewsletterController::class, 'show'])->name('newsletter');
Route::post('/newsletter', [NewsletterController::class, 'store'])->name('newsletter');

Route::get('/connexion', [AuthController::class, 'show'])->name('connexion');