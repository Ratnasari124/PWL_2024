<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\WelcomeController;
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
/*Route::get('/hello', function () {
    return 'Hello World';
});

//d
Route::get('/world', function () {
    return 'World';
});*/
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

//Controller
Route::get('/hello', [WelcomeController::class, 'hello']);
// resource (/)
Route::get('/', [PageController::class, 'index']);
// resource (/about)
Route::get('/about', [PageController::class, 'about']);
// resource (/articles/{id})
Route::get('/articles/{id}', function ($id) {
    return 'Halaman Artikel ke- ' . $id;
});

use App\Http\Controllers\PhotoController;

Route::resource('photos', PhotoController::class);
Route::resource('photos', PhotoController::class)->only([
    'index', 'show'
]);
Route::resource('photos', PhotoController::class)->except([
    'create', 'store', 'update', 'destroy'
]);

//view
/*Route::get('/greeting', function () {
    return view('hello', ['name' => 'Ratnasari']);
});*/

Route::get('/greeting', function () {
    return view('blog.hello', ['name' => 'Ratnasari']);
});

Route::get('/greeting', [
    WelcomeController::class,
    'greeting'
]);
