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
    return view('auth.log_reg');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('auth/login', [App\Http\Controllers\HomeController::class, 'index'], 'getLogin');

Route::get('/mybooking', [\App\Http\Controllers\BookController::class, 'books']);

    Route::get('/gallery', [App\Http\Controllers\GalleryController::class, 'index']);
    Route::get('/gallery/create', 'App\Http\Controllers\GalleryController@create')->name('booking.create');
    Route::post('/gallery/store', 'App\Http\Controllers\GalleryController@store')->name('booking.store');


Route::get('/aboutus', [App\Http\Controllers\AboutUsController::class, 'index']);

//Admin

Route::middleware(['roles:admin', 'auth'])->group(function () {
    Route::get('/admin' , [App\Http\Controllers\AdminController::class, 'index'])->name('admin');
    
    Route::get('/admin/create', [App\Http\Controllers\BookController::class, 'create']);
    Route::post('/admin', [\App\Http\Controllers\BookController::class, 'store']);
    Route::get('/admin/books', [\App\Http\Controllers\BookController::class, 'index']);
    Route::delete("/delete/{book}", [App\Http\Controllers\BookController::class, 'destroy'])->name('book.destroy');

    Route::delete('/admin/delete/{user}', [\App\Http\Controllers\UserController::class, 'destroy'])->name('user.destroy');
    
    
    Route::get('/admin/booking', [\App\Http\Controllers\BookingController::class, 'index']);
    Route::put('/admin/booking/{booking}/', [App\Http\Controllers\BookingController::class, 'update'])->name('booking.update');
    Route::delete("/admin/{booking}/delete", [App\Http\Controllers\BookingController::class, 'destroy'])->name('booking.destroy');
    
    
});