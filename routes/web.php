<?php

use App\Http\Controllers\AuthuserController;
use App\Http\Controllers\FileController;
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

Route::get('/user-login', [UserController::class, 'index'])->name('user.login');
Route::post('/user-login', [UserController::class, 'login'])->name('user.login.submit');
Route::get('/user-register', [UserController::class, 'create'])->name('user.register');
Route::post('/user-register-create', [UserController::class, 'store'])->name('user.register.store');

// Protected Routes (Requires Authentication)
Route::middleware(['ensure.authenticated'])->group(function () {
    Route::get('/user-deshbord', [AuthuserController::class, 'index'])->name('user.deshbord');
    // Route::resource('files', FileController::class);
    Route::resource('files', FileController::class)->names([
        'index' => 'files.index',
        'create' => 'files.create',
        'store' => 'files.store',
        'show' => 'files.show',
        'edit' => 'files.edit',
        'update' => 'files.update',
        'destroy' => 'files.destroy',
    ]);
});