<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\GoogleController;

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

Route::post('/Login', [SessionController::class, 'login'])->name('login');
Route::get('/Login', [SessionController::class, 'index']);
Route::post('/logout', [SessionController::class, 'logout']);
Route::post('/Register', [SessionController::class, 'Register']);

Route::prefix('auth/google')->group(function () {
    Route::get('/', [GoogleController::class, 'redirectToGoogle'])->name('auth.google');
    Route::get('/callback', [GoogleController::class, 'handleGoogleCallback']);
});

Route::get('/', function () {
    return view('landingPage');
});
Route::get('/about', function () {
    return view('aboutPage');
});
Route::get('/products', function () {
    return view('productsPage');
});
Route::get('/solution', function () {
    return view('products.solution');
});
Route::get('/process', function () {
    return view('products.processServices');
});
Route::get('/learning', function () {
    return view('products.learningService');
});
Route::get('/Login', function () {
    return view('auth.login');
});
Route::get('/Register', function () {
    return view('auth.register');
});
Route::get('/careers', function () {
    return view('careersPage');
});

