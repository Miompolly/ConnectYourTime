<?php

use App\Http\Controllers\UsersController;
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

Route::get('/', function () {
    return view('pages.index');
});
Route::get('/signup', function () {
    return view('pages.signup');
});
Route::get('/docs', function () {
    return view('pages.docs');
});
Route::get('/login', function () {
    return view('pages.login');
});
Route::get('/blogs', function () {
    return view('pages.blogs');
});
Route::get('/price', function () {
    return view('pages.price');
});
Route::get('/why', function () {
    return view('pages.why');
});
Route::get('/dashboard', function () {
    return view('pages.dashboard');
});

Route::post('/register', [UsersController::class, 'create']);
Route::post('/login', [UsersController::class, 'login']);


Route::get('/googleLogin', [UsersController::class, 'googleLogin']);
Route::get('/auth/google/callback', [UsersController::class, 'handleGoogleCallback']);
Route::get('/logout', [UsersController::class, 'logout'])->name('logout');
