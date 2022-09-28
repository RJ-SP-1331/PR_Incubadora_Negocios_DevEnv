<?php

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

Route::get('/login', function () {
    return view('login');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//Route::get('/students', [App\Http\Controllers\ProductController::class, 'getProducts'])->middleware('auth');

Route::group(['middleware' => 'auth.admin'], function () {
    Route::get('/admin', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('admin.dashboard');
    Route::get('/teams',[App\Http\Controllers\Admin\DashboardController::class, 'teams'])->name('admin.teams');
});

Route::group(['middleware' => 'auth.teacher'], function () {
    Route::get('/teacher', [App\Http\Controllers\Teacher\DashboardController::class, 'index'])->name('teacher.index');
    Route::get('/students', [App\Http\Controllers\Teacher\DashboardController::class, 'students'])->name('teacher.students');
});



