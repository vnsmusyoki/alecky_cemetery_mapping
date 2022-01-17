<?php

// use App\Http\Controllers\admin\ContentCOntroller;

use App\Http\Controllers\admin\AdminAccountController;
use App\Http\Controllers\admin\AdminSectionController;
use App\Http\Controllers\CommonsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', [CommonsController::class, 'index']);
Route::get('search-cemetery', [CommonsController::class, 'searchcemetery']);
Route::get('book-us', [CommonsController::class, 'bookus']);
Route::post('search-grave', [CommonsController::class, 'searchgrave']);
Route::get('search-results-list/{name}', [CommonsController::class, 'searchgraveresults']);
Route::get('cemetery/{name}', [CommonsController::class, 'cemeterydetails']);
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
Route::get('/cemetery/{deceased}', [CommonsController::class, 'deceaseddetails']);

Route::get('admin/dashboard', [AdminAccountController::class, 'index'])->name('admin');

Route::prefix('admin')->group(function () {
    Route::get('managesections', [AdminSectionController::class, 'index']);
    Route::get('createsection', [AdminSectionController::class, 'create']);
    Route::post('storesection', [AdminSectionController::class, 'store']);
    Route::get('add-new-location', [AdminAccountController::class, 'addnewlocation']);
    Route::post('storelocations', [AdminAccountController::class, 'storelocations']);
    Route::get('all-locations', [AdminAccountController::class, 'alllocations']);
    Route::get('add-deceased', [AdminAccountController::class, 'adddeceased']);
    Route::post('storedeceased', [AdminAccountController::class, 'storedeceased']);
});
// https://www.itsolutionstuff.com/post/laravel-5-multiple-markers-in-google-map-using-gmapsjsexample.html
