<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\OeuvreController;
use App\Http\Controllers\ActualiteController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\CollectionController;
use App\Http\Controllers\Admin\ActualiteController as AdminActualiteController;
use App\Http\Controllers\Admin\CategorieController as AdminCategorieController;
use App\Http\Controllers\Admin\CollectionController as AdminCollectionController;
use App\Http\Controllers\Admin\OeuvreController as AdminOeuvreController;
use App\Http\Controllers\Admin\PhotoController as AdminPhotoController;

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

Route::resource('/actualites', ActualiteController::class);
Route::resource('/categories', CategorieController::class);
Route::resource('/collections', CollectionController::class);
Route::resource('/oeuvres', OeuvreController::class);
Route::resource('/photos', PhotoController::class);



Route::middleware(['auth'])->group(function () {


    Route::get('/dashboard', function () {
        return view('dashboard');
    })->middleware(['auth'])->name('dashboard');

    Route::middleware(['admin'])->name('admin.')->prefix('admin')->group(function () {
        Route::resource('actualites', AdminActualiteController::class);
        Route::resource('/categories', AdminCategorieController::class)->except('categories.destroy');
        Route::resource('/collections', AdminCollectionController::class);
        Route::resource('/oeuvres', AdminOeuvreController::class);
        Route::resource('/photos', AdminPhotoController::class);
        Route::get('/categories/{categorie}', [AdminCategorieController::class, 'destroy'])
            ->name('categories.destroy');
    });
});


require __DIR__ . '/auth.php';
