<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\NewsPostController;
use App\Http\Controllers\AdminDashboardController;


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
Route::get('/', [MainController::class, 'index'])->name('index');
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
//Route::get('/post/{slug}', [NewsController::class, 'showPost'])->name('post.show');

// Management interface for admin and regular users
Route::get('/admin/dashboard', [AdminDashboardController::class, 'index'])->name('admin.dashboard');
//Route::resource('admin/news', NewsPostController::class);
Route::get('/admin/news', [NewsPostController::class, 'index'])->name('admin.news.index');
Route::get('/admin/news/{news}/edit', [NewsPostController::class, 'edit'])->name('admin.news.edit');

Route::get('/admin/news/{news}/update', [NewsPostController::class, 'update'])->name('admin.news.update');
Route::put('/admin/news/{news}', [NewsPostController::class, 'update'])->name('admin.news.update');

Route::delete('/admin/news/{news}', [NewsPostController::class, 'destroy'])->name('admin.news.destroy');


//Route::get('/admin/news/{news}/destroy', [NewsPostController::class, 'destroy'])->name('admin.news.destroy');
//Route::get('/admin/news/create', [NewsPostController::class, 'create'])->name('admin.news.create');
Route::get('/admin/news/{id}/edit', [NewsPostController::class, 'edit'])->name('admin.news.edit');




Route::get('/admin/news/create', [NewsPostController::class, 'create'])->name('admin.news.create');
Route::post('/admin/news', [NewsPostController::class, 'store'])->name('admin.news.store');
//Route::post('/admin/news/store', [NewsPostController::class, 'store'])->name('admin.news.store');


// handling uploaded images via the ckeditor
//Route::post('/admin/news/upload-image', [NewsPostController::class, 'uploadImage'])->name('admin.news.upload_image');
route::post('/admin/news/upload', [NewsPostController::class, 'upload'])->name('ckeditor.upload');

// handling CRUD routes
Route::resource('posts', NewsPostController::class);
// handling routes for each category
//Route::get('categories/nigeria', [NewsController::class, 'nigeria'])->name('category.nigeria');





// handling 404 page
Route::fallback(function () {
    return view('404error');
});


