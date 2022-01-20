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


Route::middleware('auth')->group(function () {
    Route::get('dashboard', [App\Http\Controllers\PagesController::class, 'dashboard'])->name('dashboard');
});


// admin
Route::namespace("Admin")->prefix('control')->group(function(){
    Route::namespace('Auth')->prefix('admin')->group(function(){
        Route::get('/login', [App\Http\Controllers\Admin\Auth\LoginController::class, 'create'])->name('admin.login');
        Route::post('/login', [App\Http\Controllers\Admin\Auth\LoginController::class, 'store'])->name('admin.store');
        Route::post('logout', [App\Http\Controllers\Admin\Auth\LoginController::class, 'destroy'])->name('admin.logout');
    });

    Route::middleware('admin')->group(function () {
        Route::get('/admin', [App\Http\Controllers\Admin\HomeController::class, 'index'])->name('admin.home');

        Route::namespace("Users")->prefix('admin/users')->group(function(){
            Route::get('/', [App\Http\Controllers\Admin\Users\UsersController::class, 'view'])->name('admin.users.view');
            Route::post('/search', [App\Http\Controllers\Admin\Users\UsersController::class, 'search'])->name('admin.users.search');
            Route::delete('/delete/{id}', [App\Http\Controllers\Admin\Users\UsersController::class, 'delete'])->name('admin.user.destroy');
        });
    });
});

require __DIR__.'/auth.php';
