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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::resource('customer','CustomerController');
Route::resource('category','CategoryController');
Route::resource('service','ServiceController');
Route::resource('product','ProductController');

Route::get('/admin', function (){
    return view('layouts.admin');
});
Route::get('/dashboard','HomeController@dashboard')->name('home');
Route::get('/home', 'HomeController@index')->name('home');
