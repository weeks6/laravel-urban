<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\PostController;
use Illuminate\Http\Request;
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

Route::get('/', function (Request $request) {
    return view('home');
})->name('home');

// Получение шаблона
Route::get('/register', function () {
    return view('register');
})->name('register');

// Обработка формы
Route::post('/register', [RegisterController::class, 'store']);

Route::middleware('guest')->namespace('\App\Http\Controllers')->group(function() {

    Route::get('/login', function () {
        return view('login');
    })->name('login');

    Route::post('/login', [LoginController::class, 'index']);
});

Route::post('/logout', [LogoutController::class, 'index'])->name('logout');

Route::get('/admin', [AdminController::class, 'index'])->name('admin');

// Posts
Route::put('/posts', [PostController::class, 'store'])->name('post_create');
