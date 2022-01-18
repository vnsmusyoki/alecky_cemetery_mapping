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
Route::post('upload-new-burial', [CommonsController::class, 'uploadburial']);
Route::get('obituaries', [CommonsController::class, 'obituaries']);
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
    Route::get('all-deceased', [AdminAccountController::class, 'alldeceased']);
    Route::get('new-requests', [AdminAccountController::class, 'pendingmappings']);
    Route::post('storesection', [AdminSectionController::class, 'store']);
    Route::get('add-new-location', [AdminAccountController::class, 'addnewlocation']);
    Route::get('deceased-details/{userid}', [AdminAccountController::class, 'deceasededtails']);
    Route::get('all-locations', [AdminAccountController::class, 'alllocations']);
    Route::get('add-deceased', [AdminAccountController::class, 'adddeceased']);
    Route::get('remove-deceased/{user}', [AdminAccountController::class, 'removedeceased']);
    Route::get('account-security', [AdminAccountController::class, 'accountsecurity']);
    Route::post('storedeceased', [AdminAccountController::class, 'storedeceased']);
    Route::post('upload-deceased-grave/{user}', [AdminAccountController::class, 'uploadcemetery']);
    Route::post('update-password', [AdminAccountController::class, 'updatepassword']);
    Route::post('update-email', [AdminAccountController::class, 'updateemail']);
    Route::post('update-avatar', [AdminAccountController::class, 'updateavatar']);
});
// https://www.itsolutionstuff.com/post/laravel-5-multiple-markers-in-google-map-using-gmapsjsexample.html
