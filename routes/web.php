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

Route::get('about', function () {
    return view('about');
})->name('about');

Route::get('programs', function () {
    return view('programs');
})->name('programs');

Route::get('calender', function () {
    return view('calender');
})->name('calender');

Route::get('contact', function () {
    return view('contact');
})->name('contact');

Route::get('dash', function () {
    return view('dashboard');
})->name('dash');


Route::resource('/posts', 'App\Http\Controllers\PostController');

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/news', [App\Http\Controllers\HomeController::class, 'news'])->name('news');


Route::post('/contactus', [App\Http\Controllers\HomeController::class, 'saveMessage'])->name('contactus');

Route::get('news/{slug}', ['as' => 'blog.single', 'uses' => 'App\Http\Controllers\HomeController@getSingle'])->where('slug', '[\w\d\-\_]+');
