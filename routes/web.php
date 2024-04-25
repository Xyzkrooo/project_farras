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

Route::get('/about', function () {
    $nama = "Farras";
    $jk = "Lakik";
    $alamat = "Rancamanyar";
    $pendidikan = "SMK";
    $pekerjaan = "Pelajar";
    return view('biodata', compact('nama','jk','alamat','pendidikan','pekerjaan'));
});

Route::get('/about3', function () {
    return view('biodata2');
});

Route::get('/kontak', function () {
    return view('biodata3');
});

Route::get('/about2/{nama}/{jk}/{almt}/{pd}/{pk}', function (Request $request, $nama,$jk,$pd,$almt,$pk) {
    $nama2 = $nama;
    $jk2 = $jk;
    $almt2 = $almt;
    $pd2 = $pd;
    $pk2 = $pk;
    return view('param', compact('nama2','jk2','almt2','pd2','pk2'));
});