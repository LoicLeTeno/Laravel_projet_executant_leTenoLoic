<?php

use App\Http\Controllers\AvatarController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\UserController;
use App\Models\Category;
use App\Models\Photo;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/back-office/gallery', function () {
    $photos = Photo::all();
    $categorys = Category::all();

    return view('backOffice.pages.gallery', compact('photos', 'categorys'));
});

require __DIR__.'/auth.php';


// Route Ressource
Route::resource('back-office/users', UserController::class);
Route::resource('back-office/avatars', AvatarController::class);
Route::resource('back-office/photos', PhotoController::class);
Route::resource('back-office/categories', CategoryController::class);