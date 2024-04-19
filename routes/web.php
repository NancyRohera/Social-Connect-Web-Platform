<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FacebookController;



Route::get('/', function () {
    return view('welcome');
});
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
// routes/web.php


Route::get('/connect-to-facebook', [FacebookController::class, 'redirectToFacebook'])->name('connectToFacebook');
Route::get('/facebook/callback', [FacebookController::class, 'handleFacebookCallback']);



Route::get('/welcome', [WelcomeController::class, 'index']);
Route::get('/register', RegistrationController::class);
Route::get('/register', RegistrationController::class, 'showRegistrationForm')->name('register');
Route::post('/register', [RegistrationController::class, 'createUser']);
Route::get('/home', [HomeController::class, 'showhomepage'])->name('home');