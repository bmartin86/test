<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;

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

// USER DASHBOARD
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'user'])->name('dashboard');

// ADMIN DASHBOARD
Route::get('/admin_dashboard', function () {
    return view('admin_dashboard');
})->middleware(['auth', 'admin'])->name('admin_dashboard');

require __DIR__.'/auth.php';


// user protected routes
Route::group(['middleware' => ['auth', 'user'], 'prefix' => 'user'], function () {
//    Route::get('/', 'HomeController@index')->name('user_dashboard');
    Route::get('/', [UserController::class, 'index'])->name('user.home');
});

// admin protected routes
Route::group(['middleware' => ['auth', 'admin'], 'prefix' => 'admin'], function () {
//    Route::get('/', 'HomeController@index')->name('admin_dashboard');
    Route::get('/', [AdminController::class, 'index'])->name('admin.home');
    Route::get('/newUser', [AdminController::class, 'newUser'])->name('new.user');
    Route::post('/newUser', [AdminController::class, 'newUser'])->name('create.user');
    Route::get('/user/details', [AdminController::class, 'showUser'])->name('user.details');
    Route::get('/newUser', [AdminController::class, 'newUser'])->name('new.user');
});
