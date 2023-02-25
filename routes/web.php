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

Route::get('/{id}', function () {
echo "<h1>Selamat Datang</h1>";
});

Route::get('/about/{nim}/{nama}/{kelas}', function () {
echo "<h1>NIM : 2141720203</h1>";
echo "<h1>Nama : Abiyasa Putra Prasetya</h1>";
echo "<h1>Kelas : TI 2H</h1>";
});

Route::get('/articles/{id}', function ($id) {
echo "<h1>Halaman Artikel dengan ID $id</h1>";
});