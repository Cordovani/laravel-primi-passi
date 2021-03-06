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
    return view('homepage',[
        "name"=>"lorenzo",
        "surname"=>"cordovani",
        "awesome"=>"Boolean",
    ]);
    // return 'My homepage';
})->name('homepage');

Route::get('/about', function () {
    return view('about');
})->name('about');

// Route::get('/homepage', function () {
//     return view('homepage');
// })->name('homepage');
// non si può riutilizzare se è la root

Route::get('/private', function () {
    return view('private');
})->name('private');