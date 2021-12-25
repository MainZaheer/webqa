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

Route::get('/', [App\Http\Controllers\PagesController::class, 'welcome'])->name('welcome');
Route::get('privacy-policy', [App\Http\Controllers\PagesController::class, 'privacy'])->name('privacy');
Route::get('terms-of-service', [App\Http\Controllers\PagesController::class, 'terms'])->name('terms');
Route::get('dashboard', [App\Http\Controllers\PagesController::class, 'dashboard'])->middleware(['auth'])->name('dashboard');


// admin
Route::namespace("Admin")->prefix('admin')->group(function(){
    Route::get('/', [App\Http\Controllers\Admin\HomeController::class, 'index'])->name('admin.home');
    Route::namespace('Auth')->group(function(){
        Route::get('/login', [App\Http\Controllers\Admin\Auth\LoginController::class, 'showLoginForm'])->name('admin.login');
        Route::post('/login', [App\Http\Controllers\Admin\Auth\LoginController::class, 'login']);
        Route::post('logout', [App\Http\Controllers\Admin\Auth\LoginController::class, 'logout'])->name('admin.logout');
    });
  
});

require __DIR__.'/auth.php';
