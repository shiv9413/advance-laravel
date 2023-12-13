<?php

use Illuminate\Support\Facades\Route;
use Vendor\Pdfcrowd\Pdfcrowd;

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

// if(in_array(\Request::segment(1),\Config::get('app.alt_langs'))){
//     \App::setLocale(\Request::segment(1));
//     Config::set('app.locale_prefix',\Request::segment(1));
// }

// Route::group(['prefix' => \Config::get('app.locale_prefix')],function(){
//    //
// });

Route::get('/calendar',function(){
    return view('calendar');
});

