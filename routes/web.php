<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OmsetkuV2Controller;
use App\Http\Controllers\OmsetkuV2_Controller;

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

Route::get('/inv', function () {
    return view('data_invonce');
});
Route::get('/budget', function () {
    return view('data_budgeting');
});
Route::get('/grp', function () {
    return view('data_groupsales');
});
Route::get('/tgt', function () {
    return view('data_targetsales');
});
Route::get('/kom', function () {
    return view('data_komisi');
});
Route::get('/reim', function () {
    return view('data_reimburse');
});

// Route::get('/about', function () {
//     return view('front-omsetku/about-V2_2');
// });

Route::get('/home', [OmsetkuV2Controller::class, 'indexV2_2']);
Route::get('/about', [OmsetkuV2_Controller::class, 'indexV2_2']);


Route::get('/quotation', function () {
    return view('quotation_d');
});
Route::get('/saleorder', function () {
    return view('saleorder_d');
});