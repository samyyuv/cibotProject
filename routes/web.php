<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\OeuvreController;
use App\Http\Controllers\ActualiteController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\CollectionController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\PhotoController as AdminPhotoController;
use App\Http\Controllers\Admin\OeuvreController as AdminOeuvreController;
use App\Http\Controllers\Admin\ContactController as AdminContactController;
use App\Http\Controllers\Admin\ActualiteController as AdminActualiteController;
use App\Http\Controllers\Admin\CategorieController as AdminCategorieController;
use App\Http\Controllers\Admin\CollectionController as AdminCollectionController;
use App\Http\Controllers\Admin\MessageController;
use App\Http\Controllers\BiographieController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;

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

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/', [MessageController::class, 'create'])
//     ->name('message.create');


Route::resource('/biographie', BiographieController::class);


Route::resource('/actualites', ActualiteController::class);
Route::resource('/categories', CategorieController::class);
Route::resource('/collections', CollectionController::class);
Route::resource('/oeuvres', OeuvreController::class);
Route::resource('/photos', PhotoController::class);
Route::resource('/', HomeController::class);
Route::view('/contactez-nous', 'partialsFront.contactPage');


Route::get('lang/{lang}', ['as' => 'lang.switch', 'uses' => '\App\Http\Controllers\LanguageController@switchLang']);

Route::middleware(['auth'])->group(function () {
    Route::view('monProfile', 'authentication.profile')
        ->name('profile');
    Route::put('monProfile', [ProfileController::class, 'update'])
        ->name('profile.update');
    Route::middleware(['admin'])->name('admin.')->prefix('admin')->group(function () {
        Route::resource('actualites', AdminActualiteController::class);
        Route::resource('/categories', AdminCategorieController::class)
            ->except('categories.destroy');
        Route::get('/categories/{categorie}', [AdminCategorieController::class, 'destroy'])
            ->name('categories.destroy');
        Route::resource('/collections', AdminCollectionController::class);
        Route::resource('/oeuvres', AdminOeuvreController::class);
        Route::resource('/photos', AdminPhotoController::class);
        Route::resource('/users', UserController::class);
        Route::resource('contacts', AdminContactController::class);
        Route::resource('messages', MessageController::class)
            ->except('messages.create');
        Route::get('/', [DashboardController::class, 'index'])
            ->name('dashboard');
        Route::get('/rechercher', [DashboardController::class, 'search'])
            ->name('dashboard.rechercher');
    });
});


require __DIR__ . '/auth.php';
