<?php

use App\Http\Controllers\OurTeamController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\MembershipController;

Route::get('/', function () {
    return view('registration');
})->name('registration');

Route::get('/our-team', [OurTeamController::class, 'index'])->name('our-team.index');
Route::get('/our-team/create', [OurTeamController::class, 'create'])->name('our-team.create');
Route::post('/our-team', [OurTeamController::class, 'store'])->name('our-team.store');
Route::get('/our-team/{response}/edit', [OurTeamController::class, 'edit'])->name('our-team.edit');
Route::put('/our-team/{response}', [OurTeamController::class, 'update'])->name('our-team.update');
Route::delete('/our-team/{response}', [OurTeamController::class, 'destroy'])->name('our-team.destroy');

Route::get('/contact-us', function () {
    return view('contact-us');
})->name('contact-us');

Route::get('/blogs', function () {
    return view('blogs');
})->name('blogs');

Route::get('/about-us', function () {
    return view('about-us');
})->name('about-us');

Route::post('/contact-us', [ContactUsController::class, 'store'])->name('contacts.store');
Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/home', [MembershipController::class, 'store'])->name('home.store');

Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('post-login', [AuthController::class, 'postLogin'])->name('login.post'); 
Route::get('registration', [AuthController::class, 'registration'])->name('register');
Route::post('post-registration', [AuthController::class, 'postRegistration'])->name('register.post'); 
Route::get('home', [AuthController::class, 'home'])->name('home'); 
Route::get('logout', [AuthController::class, 'logout'])->name('logout');