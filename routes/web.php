<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    Auth\LoginController,
    StepController
};

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

Route::get('/login/{lang?}', LoginController::class)
                ->middleware('guest')
                ->name('login');

Route::post('/login', [LoginController::class, 'authLogin'])
                ->middleware('guest')
                ->name('auth.login');

Route::post('/logout', [LoginController::class, 'authLogout'])
                ->name('logout');

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('step', StepController::class);
