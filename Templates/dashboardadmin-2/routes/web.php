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

Route::get('/', function () {
    return view('index');
});

Route::view('jov','index');
Route::view('map','map-google');
Route::view('map-google','map-google');

Route::view('index','index');
Route::view('map-google','map-google');
Route::view('pages-profile','pages-profile');
Route::view('table-basic','table-basic');

Route::view('icon-fontawesome','icon-fontawesome');
Route::view('pages-blank','pages-blank');
Route::view('pages-error-404','pages-error-404');



