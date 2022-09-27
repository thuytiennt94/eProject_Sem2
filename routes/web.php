<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front;
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

Route::get('/', [Front\Home::class, 'index']);



Route::prefix('shop')->group(function() {
    Route::get('/', [Front\Shop::class, 'index']);

    Route::get('/product/{id}', [Front\Shop::class, 'show']);

    Route::post('/product/{id}', [Front\Shop::class, 'postComment']);
});

Route::prefix('blog')->group(function() {
    Route::get('/', [Front\Blog::class, 'index']);
    Route::get('/blog_details', [Front\Blog::class, 'blog_details']);
});

Route::get('/contact', [Front\Contact::class, 'indexContact']);

Route::get('/faq', [Front\Faq::class, 'indexFaq']);

Route::prefix('login')->group(function()
{
    Route::get('/', [Front\Login::class, 'index']);
    Route::get('/register', [Front\Login::class, 'register']);
});
