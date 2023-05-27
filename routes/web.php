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

Route::get('/', [staticController::class, 'index']);

Route::get('/programs.php', [staticController::class, 'programs']);

Route::get('/about.php', [staticController::class, 'about']);

Route::get('profile.php', [staticController::class, 'profile']);

Route::get('/login.php', [staticController::class, 'login']);

Route::get('/signup.php', [staticController::class, 'signup']);


Route::resource('programs', ProgramsController::class);
