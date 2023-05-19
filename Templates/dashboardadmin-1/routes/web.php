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
    return view('welcome1');
});
Route::view('Dashboard', 'Dashboard.index');
Route::view('/index', 'Dashboard.index');
Route::view('/login', 'Dashboard.pages-login');
Route::view('/pages-login', 'Dashboard.pages-login');
Route::view('/register', 'Dashboard.pages-register');
Route::view('/pages-register', 'Dashboard.pages-register');
Route::view('/loged', 'Dashboard.index');
Route::view('/tables-data', 'Dashboard.tables-data');
Route::view('/tables-general', 'Dashboard.tables-general');
Route::view('/components-alerts', 'Dashboard.components-alerts');
Route::view('/components-accordion', 'Dashboard.components-accordion');
Route::view('/registered', 'Dashboard.index');

Route::view('/components-badges', 'Dashboard.components-badges');
Route::view('/components-breadcrumbs', 'Dashboard.components-breadcrumbs');
Route::view('/components-buttons', 'Dashboard.components-buttons');
Route::view('/components-cards', 'Dashboard.components-cards');
Route::view('/components-carousel', 'Dashboard.components-carousel');
Route::view('/components-list-group', 'Dashboard.components-list-group');

Route::view('/components-modal', 'Dashboard.components-modal');
Route::view('/components-tabs', 'Dashboard.components-tabs');
Route::view('/components-pagination', 'Dashboard.components-pagination');
Route::view('/components-progress', 'Dashboard.components-progress');
Route::view('/components-spinners', 'Dashboard.components-spinners');
Route::view('/components-tooltips', 'Dashboard.components-tooltips');


Route::view('/forms-elements', 'Dashboard.forms-elements');
Route::view('/forms-layouts', 'Dashboard.forms-layouts');
Route::view('/forms-editors', 'Dashboard.forms-editors');
Route::view('/forms-validation', 'Dashboard.forms-validation');


Route::view('/charts-chartjs', 'Dashboard.charts-chartjs');
Route::view('/charts-apexcharts', 'Dashboard.charts-apexcharts');
Route::view('/charts-echarts', 'Dashboard.charts-echarts');

Route::view('/icons-bootstrap', 'Dashboard.icons-bootstrap');
Route::view('/icons-remix', 'Dashboard.icons-remix');
Route::view('/icons-boxicons', 'Dashboard.icons-boxicons');

Route::view('/users-profile', 'Dashboard.users-profile');
Route::view('/pages-faq', 'Dashboard.pages-faq');
Route::view('/pages-contact', 'Dashboard.pages-contact');

Route::view('/pages-error-404', 'Dashboard.pages-error-404');
Route::view('/pages-blank', 'Dashboard.pages-blank');





