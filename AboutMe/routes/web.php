<?php

use Illuminate\Support\Facades\App;
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

Route::get('/', 'App\Http\Controllers\HomeController@index')->name("home.index");

Route::get('/about', 'App\Http\Controllers\AboutController@about')->name("about.index");
Route::get('/books', 'App\Http\Controllers\BooksController@book')->name("book.index");
#Route::get('/books', 'App\Http\Controllers\BooksController@book')->name("book.show");


Route::get('/admin', 'App\Http\Controllers\Admin\AdminHomeController@index')->name("admin.home.index");
Auth::routes();