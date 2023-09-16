<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClickCountController;
use App\Http\Controllers\BlogController;

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
    return view('index');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/rack', function () {
    return view('rack');
});

Route::get('/work', function () {
    return view('work');
});

Route::get('/resume', function () {
    return view('resume');
});

Route::get('/track-click/{article_id}', [ClickCountController::class, 'trackClick'])->name('trackClick');

Route::get('/rack', [ClickCountController::class, 'showArticles'])->name('showArticles');
Route::get('/article-detail/{article_id}/{url}', [ClickCountController::class, 'showArticleDetail'])->name('articleDetail');
Route::get('/article_detail', [ClickCountController::class, 'index'])->name('articleDetail');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
