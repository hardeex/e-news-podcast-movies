<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\NewsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/*
Route::get('/', function () {
    return view('welcome');
});
*/

// navigate the custom home page
Route::get('/', [MainController::class, 'index']);
Route::get('/base', [MainController::class, 'base']); // to be deleted later
Route::get('/single', [MainController::class, 'single'])->name('single'); // to be handled properly later

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';



Route::get('/category/{category}', [NewsController::class, 'showByCategory'])->name('category.show');
Route::get('/post/{id}', [NewsController::class, 'showPost'])->name('post.show');



// handling 404 page
Route::fallback(function () {
    return view('news.no-news-post');
});


