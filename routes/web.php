<?php

// use App\Http\Controllers\admin\ContentCOntroller;

use App\Http\Controllers\admin\AdminAccountController;
use App\Http\Controllers\admin\AdminSectionController;
use App\Http\Controllers\CommonsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', [CommonsController::class, 'index']);
Route::get('about-us', [CommonsController::class, 'aboutus']);
Route::get('book-us', [CommonsController::class, 'bookus']);
Route::get('contact-us', [CommonsController::class, 'contactus']);
Route::get('/logoutchecked', function (Request $request) {
    $request->session()->flush();
    Auth::logout();
    return Redirect('/login')->with('passwordreset', 'Congrats! Your account is now set.You can now login');
    $request->session()->flush();
    Auth::logout();
});
Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('admin/dashboard', [AdminAccountController::class, 'index'])->name('admin');

Route::prefix('admin')->group(function () {
    Route::get('managesections', [AdminSectionController::class, 'index']);
    Route::get('createsection', [AdminSectionController::class, 'create']);
    Route::post('storesection', [AdminSectionController::class, 'store']);
});


