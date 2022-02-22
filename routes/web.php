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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::view('/'            , 'app'         )->name('home');
Route::view('/about'       , 'about'       )->name('about');
Route::view('/pricing'     , 'pricing'     )->name('pricing');
Route::view('/contact'     , 'contact'     )->name('contact');
Route::view('/blog-grids'  , 'blog-grids'  )->name('blog');
Route::view('/blog-details', 'blog-details')->name('blog.detail');
Route::view('/signup'      , 'signup'      )->name('register');
Route::view('/signin'      , 'signin'      )->name('login');
Route::view('/404'         , '404'         )->name('404');
