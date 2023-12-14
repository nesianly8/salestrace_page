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
Route::get('/invoice', function () {
    return view('invoice_d');
});
Route::get('/customer', function () {
    return view('customer_d');
});
Route::get('/product', function () {
    return view('product_d');
});
Route::get('/brand', function () {
    return view('brand_d');
});
Route::get('/reimburse', function () {
    return view('reimburse_d');
});
Route::get('/komisi', function () {
    return view('komisi_d');
});
Route::get('/masterdata', function () {
    return view('masterdata_d');
});
Route::get('/crm', function () {
    return view('crm_d');
});
Route::get('/groupsales', function () {
    return view('groupsales_d');
});
Route::get('/salestarget', function () {
    return view('salestarget_d');
});
Route::get('/budgeting', function () {
    return view('budgeting_d');
});

Route::get('/home24', function () {
    return view('home-v2_4');
});

Route::get('/tabel', function () {
    return view('tabel_form');
});