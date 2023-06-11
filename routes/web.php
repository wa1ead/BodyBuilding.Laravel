<?php

use App\Http\Controllers\ProgramsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StaticController;

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

Route::get('/', [staticController::class, 'index'])->name('home.index');

Route::get('/about', [staticController::class, 'about'])->name('home.about');

Route::get('/programs', [staticController::class, 'programs'])->name('home.programs');

Route::get('/login', [staticController::class, 'login'])->name('home.login');

Route::get('/signup', [staticController::class, 'signup'])->name('home.signup');

Route::get('profile', [staticController::class, 'profile'])->name('home.profile');

Route::resource('programs', ProgramsController::class);
