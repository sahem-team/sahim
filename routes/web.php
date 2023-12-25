<?php

use App\Http\Controllers\DonationController;
use App\Http\Controllers\DonationRequestController;
use App\Http\Controllers\generatePDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Request as FacadesRequest;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/about-us', function () {
    return view('aboutUs');
});
Route::get('/contact-us', function () {
    return view('contactUs');
});
Route::get('/articles', function () {
    return view('articles');
});
Route::get('/article', function () {
    return view('article');
});

Route::resource('donations', DonationController::class);
Route::resource('donation_requests', DonationRequestController::class);

Route::get('/inv', function(){
    return view('pdf.invoice');
});

Route::get('receipt/{donation_request}', [generatePDF::class, 'index'])->name('receipt.pdf');
