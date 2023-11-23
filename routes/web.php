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