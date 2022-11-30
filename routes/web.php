<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LiveController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MeteoController;
use Illuminate\Auth\Events\Authenticated;
use App\Http\Controllers\RubricController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;

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

Route::get('/search', [SearchController::class, 'index'])->name('search');

Route::get('/contact', [ContactController::class, 'show'])->name('contact');
Route::post('/contact', [ContactController::class, 'store'])->name('contact');

Route::get('/newsletter', [NewsletterController::class, 'show'])->name('newsletter');
Route::post('/newsletter', [NewsletterController::class, 'store'])->name('newsletter');

Route::get('/mon-compte', [UserController::class, 'show'])->middleware(['auth', 'verified'])->name('mon-compte');
Route::post('/mon-compte', [UserController::class, 'update'])->middleware(['auth', 'verified'])->name('mon-compte');
Route::get('/logout', [AuthenticatedSessionController::class, 'destroy'])->middleware(['auth', 'verified'])->name('deconnexion');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
