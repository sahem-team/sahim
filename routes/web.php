<?php

use App\Http\Controllers\DonationController;
use App\Http\Controllers\DonationRequestController;
use App\Http\Controllers\generatePDF;
use App\Models\Article;
use App\Models\Home;
use Illuminate\Support\Facades\Route;
use App\Filament\Resources\HomeResource;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\RegistrationController;
use PhpParser\Builder\Function_;
use PhpParser\Node\Expr\FuncCall;
use RealRashid\SweetAlert\Facades\Alert;

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
    $home = Home::where('page', 'الرئيسية')->first();
    return view('welcome', compact('home'));
})->name('welcome');
Route::get('/about-us', function () {
    $home = Home::where('page', 'من نحن')->first();
    return view('aboutUs', compact('home'));
});
Route::get('/contact-us', function () {
    $home = Home::where('page', 'تواصل معنا')->first();
    return view('contactUs', compact('home'));
});
Route::post('/contact-us', [MessageController::class, 'store'])->name('contactUs.store');

Route::get('/article/{id}', function ($id) {
    $article = Article::find($id);
    return view('article', compact('article'));
})->name('article.show');
Route::get('/articles', function () {
    $articles = Article::all();
    return view('articles', compact('articles'));
});

// Route::resource('donations', DonationController::class);
// Route::resource('donation_requests', DonationRequestController::class);
Route::get('/donations', [DonationController::class, 'index'])->name('donations.show');
// Route::get('/donations/{donation}', [DonationController::class, 'show'])->name('donations.show');
// Route::post('/donation_requests', [DonationRequestController::class, 'store'])->name('donation_requests.store');
Route::middleware([ 'charity'])->group(function () {
    Route::get('/donations/{donation}', [DonationController::class, 'show'])->name('donations.show');
    Route::post('/donation_requests', [DonationRequestController::class, 'store'])->name('donation_requests.store');
});

Route::get('/inv', function () {
    return view('pdf.invoice');
});

Route::get('donor-register', function(){
    return view('donor_register');
});
Route::get('charity-register', function(){
    return view('charity_register');
});

Route::post('/donor-register', [RegistrationController::class, 'storeDonor']);
Route::post('/charity-register', [RegistrationController::class, 'storeCharity']);

Route::get('newsLetter' ,function(){
    Alert::success('شكرا لك على الإشتراك');
    return redirect('/articles');
});
Route::get('receipt/{donation_request}', [generatePDF::class, 'index'])->name('receipt.pdf');

