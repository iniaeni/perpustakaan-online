<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WikbookController;

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

Route::get('/', [WikbookController::class, 'index'])->name('index');
Route::get('/register', [WikbookController::class, 'register'])->name('register');
Route::post('/inputRegister', [WikbookController::class, 'inputRegister'])->name('inputRegister');
Route::get('/login', [WikbookController::class, 'login'])->name('login');
Route::post('/log-in', [WikbookController::class, 'auth'])->name('auth.login');
Route::get('/E-Wikbook', [WikbookController::class, 'ebook'])->name('E-Wikbook');