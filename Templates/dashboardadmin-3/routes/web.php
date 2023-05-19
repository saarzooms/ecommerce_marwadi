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
    return view('welcome');
});
Route::view('index','index');
Route::view('pages/login','pages.sign-in');
Route::view('pages/signup','pages.sign-up');

Route::view('/dashboard','pages.dashboard');
Route::view('pages/dashboard','pages.dashboard');
Route::view('pages/tables','pages.tables');
Route::view('pages/billing','pages.billing');
Route::view('pages/virtual-reality','pages.virtual-reality');
Route::view('pages/notifications','pages.notifications');
Route::view('pages/profile','pages.profile');
Route::view('pages/rtl','pages.rtl');

Route::view('pages/sign-in','pages.sign-in');
Route::view('pages/login','pages.sign-in');
Route::view('pages/sign-up','pages.sign-up');
Route::view('pages/profile','pages.profile');

