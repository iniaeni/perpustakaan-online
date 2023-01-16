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
