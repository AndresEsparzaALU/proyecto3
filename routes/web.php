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

/* Route::get('/', function () {
    return view('welcome');
});
Route::get('encuentro', function () {
    return view('encuentro');
});

Route::get('contact', function () {
    return view('contact');
});

Route::get('about', function () {
    return view('about');
});

Route::get('thingsicando', function() {
    return view('thingsicando');
});
Route::get('accomplishments', function() {
    return view('accomplishments');
}); */

Route::get('/', function () {
    return view('home');
});

Route::get('login', function () {
    return view('auth.login');
});

Route::get('productos', function () {
    return view('productos.index');
});

Route::get('productos/show/{id}', function ($id) {
    return view('productos.show', ['id' => $id]);
});

Route::get('productos/create', function () {
    return view('productos.create');
});

Route::get('productos/edit/{id}', function ($id) {
    return view('productos.edit', ['id' => $id]);
});
