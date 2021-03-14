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

Route::get('contact', function () {
    return view('contact');
})->name('contact');


Route::resource('/posts', 'App\Http\Controllers\PostController');

Auth::routes();

Route::get('messages', [App\Http\Controllers\AdminController::class, 'getMessage'])->name('message');

Route::get('dash', [App\Http\Controllers\AdminController::class, 'dashboard'])->name('dash');
Route::post('add_event', [App\Http\Controllers\AdminController::class, 'addEvent'])->name('addEvent');

Route::post('delEvent', [App\Http\Controllers\AdminController::class, 'delEvent'])->name('delEvent');

Route::get('media-edit', [App\Http\Controllers\AdminController::class, 'images'])->name('myMedia');
Route::delete('media-del', [App\Http\Controllers\AdminController::class, 'destroy'])->name('image.delete');


Route::get('add-media', [App\Http\Controllers\PostController::class, 'mediaPanel'])->name('getMedia');
Route::post('add-media-album', [App\Http\Controllers\PostController::class, 'addAlbum'])->name('storeMediaAlbum');
Route::get('media/{album?}', [App\Http\Controllers\HomeController::class, 'media'])->name('gallery');

Route::post('image-upload', [App\Http\Controllers\PostController::class, 'storeMedia'])->name('storeMedia');

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('calender', [App\Http\Controllers\HomeController::class, 'calender'])->name('calender');
Route::get('news', [App\Http\Controllers\HomeController::class, 'news'])->name('news');


Route::post('contactus', [App\Http\Controllers\HomeController::class, 'saveMessage'])->name('contactus');

Route::get('news/{slug}', ['as' => 'blog.single', 'uses' => 'App\Http\Controllers\HomeController@getSingle'])->where('slug', '[\w\d\-\_]+');
