<?php

use App\Http\Controllers\AvatarController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\UserController;
use App\Models\Image;
use App\Models\User;
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

Route::get('/gallery', function () {
    $images = Image::all();
    return view('pages.gallery.index', compact('images'));
});

Route::get('/users', function () {
    $users = User::all();
    return view('pages.users.index', compact('users'));
});

Route::resource('user', DashboardController::class);
Route::resource('avatar', AvatarController::class);
Route::resource('category', CategoryController::class);
Route::resource('image', ImageController::class);
Route::resource('users', UserController::class);

require __DIR__.'/auth.php';
