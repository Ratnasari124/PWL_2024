<?php

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

//PRAKTIKUM 1
Route::get('/hello', function () {
    return 'Hello World';
});

//d
Route::get('/world', function () {
    return 'World';
});
//f
Route::get('/selamat datang', function () {
    return 'Selamat Datang';
});
//g
Route::get('/about', function () {
    return 'NIM : 2241720007 NAMA : RATNASARI';
});

//PRAKTIKUM 2

//a
Route::get('/user/{ratna}', function ($name) {
    return 'Nama saya ' . $name;
});
//d
Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
    return 'Pos ke-' . $postId . " Komentar ke-: " . $commentId;
});
//f
Route::get('/articles/{id}', function ($id) {
    return 'Halaman Artikel ' . $id;
});

//PRAKTIKUM 3
//a
Route::get('/user/{name?}', function ($name = null) {
    return 'Nama saya ' . $name;
});
//d
Route::get('/user/{name?}', function ($name = 'John') {
    return 'Nama saya ' . $name;
});

//PRAKTIKUM 4
//a
Route::get('/user/profile', function () {
    //
})->name('profile');
