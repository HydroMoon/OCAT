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

Route::get('dash', [App\Http\Controllers\AdminController::class, 'dashboard'])->name('dash');
Route::post('add_event', [App\Http\Controllers\AdminController::class, 'addEvent'])->name('addEvent');

Route::post('delEvent', [App\Http\Controllers\AdminController::class, 'delEvent'])->name('delEvent');

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('calender', [App\Http\Controllers\HomeController::class, 'calender'])->name('calender');
Route::get('news', [App\Http\Controllers\HomeController::class, 'news'])->name('news');


Route::post('contactus', [App\Http\Controllers\HomeController::class, 'saveMessage'])->name('contactus');

Route::get('news/{slug}', ['as' => 'blog.single', 'uses' => 'App\Http\Controllers\HomeController@getSingle'])->where('slug', '[\w\d\-\_]+');
