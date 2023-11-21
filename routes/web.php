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

Route::get('/file', function () {
    // Replace 'your-username' and 'your-api-key' with your Pdfcrowd credentials
    $username = 'obligations';
    $apiKey = '3258f988c032d72a74e8fb5feb83deb5';

    $pdfcrowd = new Pdfcrowd($username, $apiKey);

    $html = '<html><body><h1>Hello, Pdfcrowd!</h1></body></html>';

    $options = [
        'encoding' => 'utf-8',
        'dpi' => 300,
    ];

    // Convert HTML to PDF
    $pdf = $pdfcrowd->convertHtml($html, $options);

    return response($pdf)->header('Content-Type', 'application/pdf');
});
