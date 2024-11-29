<?php

use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('welcome');
});
// Route::get('/home', function () {
//     return view('welcome');
// });

Route::get('/user-login', [UserController::class, 'index'])->name('user.login');
Route::post('/user-login', [UserController::class, 'login'])->name('user.login.submit');
Route::get('/user-register', [UserController::class, 'create'])->name('user.register');
Route::post('/user-register-create', [UserController::class, 'store'])->name('user.register.store');

// Protected Routes (Requires Authentication)
Route::middleware(['ensure.authenticated'])->group(function () {
    Route::get('/home', function () {
        return view('welcome'); // User's dashboard or home page
    })->name('home');
});