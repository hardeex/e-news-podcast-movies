<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;


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

/**
 * 
 * THE DEFAULT LARAVEL INDEX PAGE
    Route::get('/', function () {
        return view('welcome');
    });

 */

// navigate the custom home page
Route::get('/', [MainController::class, 'index']);
Route::get('/base', [MainController::class, 'base']); // to be deleted later
Route::get('/single', [MainController::class, 'single'])->name('single'); // to be handled properly later