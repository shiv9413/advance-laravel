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

Route::get('/check',function(){
    $ip = '103.174.10.78'; 
  
    // Use JSON encoded string and converts 
    // it into a PHP variable 
    $ipdat = @json_decode(file_get_contents( 
        "http://www.geoplugin.net/json.gp?ip=" . $ip)); 
    
    echo 'Country Name: ' . $ipdat->geoplugin_countryName . "\n"; 
    echo 'City Name: ' . $ipdat->geoplugin_city . "\n"; 
    echo 'Continent Name: ' . $ipdat->geoplugin_continentName . "\n"; 
    echo 'Latitude: ' . $ipdat->geoplugin_latitude . "\n"; 
    echo 'Longitude: ' . $ipdat->geoplugin_longitude . "\n"; 
    echo 'Currency Symbol: ' . $ipdat->geoplugin_currencySymbol . "\n"; 
    echo 'Currency Code: ' . $ipdat->geoplugin_currencyCode . "\n"; 
    echo 'Timezone: ' . $ipdat->geoplugin_timezone; 
});

Route::get('/cookie',function(){
    $mycookie = setcookie('mycookie', 'myvalue', time() + 30*24*60*60, "/");
    print_r($mycookie);
});