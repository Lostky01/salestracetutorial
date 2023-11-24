<?php

use Illuminate\Support\Facades\Route;
use App\Models\Helper;

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
//DOD 22 November 2023
Route::get('/', function () {
    return view('so');
});
Route::get('/quo', function () {
    return view('quo');
});
Route::get('/invoice', function () {
    return view('data_invonce');
});
Route::get('/budgeting', function () {
    return view('data_budgeting');
});

//DOD 23 November 2023
Route::get('/customer', function () {
    return view('customer');
});
Route::get('/brand', function () {
    return view('brand');
});

Route::get('/group-sales', function () {
    return view('data_groupsales');
});
Route::get('/target-sales', function () {
    return view('data_targetsales');
});

//DOD 24 November 2023
Route::get('/crm', function () {
    return view('crm');
});
Route::get('/product', function () {
    return view('product');
});
Route::get('/master-data-user', function () {
    return view('masterdatauser');
});
Route::get('/commission', function () {
    return view('data_komisi');
});
Route::get('/reimburse', function () {
    return view('data_reimburse');
});
