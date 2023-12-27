<?php

use App\Http\Controllers\DonationController;
use App\Http\Controllers\DonationRequestController;
use App\Http\Controllers\generatePDF;
use App\Models\Article;
use App\Models\Home;
use Illuminate\Support\Facades\Route;
use App\Filament\Resources\HomeResource;

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
});
Route::get('/about-us', function () {
    $home = Home::where('page', 'من نحن')->first();
    return view('aboutUs', compact('home'));
});
Route::get('/contact-us', function () {
    $home = Home::where('page', 'تواصل معنا')->first();
    return view('contactUs', compact('home'));
});
Route::get('/article/{id}', function ($id) {
    $article = Article::find($id);
    return view('article', compact('article'));
})->name('article.show');
Route::get('/articles', function () {
    $articles = Article::all();
    return view('articles', compact('articles'));
});

Route::resource('donations', DonationController::class);
Route::resource('donation_requests', DonationRequestController::class);

Route::get('/inv', function () {
    return view('pdf.invoice');
});

// $x = HomeResource::getUrl('index');

// Route::get('/admin/homes', function () {
//     $url = HomeResource::getUrl('edit', ['record' => 1]);
//     return redirect($url);
//     // return redirect(HomeResource::getUrl('index'));
// });

Route::get('receipt/{donation_request}', [generatePDF::class, 'index'])->name('receipt.pdf');
