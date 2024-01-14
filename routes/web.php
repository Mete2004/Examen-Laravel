<?php

use Illuminate\Support\Facades\Route;

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

/*
deze functie zorgt ervoor dat de browser een verzoek stuurt naar de webserver. in dit geval is het een 'get' verzoek.
en de return view zorgt ervoor dat de juiste view word getoond bij de gebruiker.
*/
Route::get('/', function () {
    return view('home');
});

Route::get('/service', function (){
    return view('service');
});

Route::get('/about_us', function (){
    return view('about_us');
});

Route::get('/afspraak', function (){
    return view('afspraak');
});

Route::get('/prices', function (){
    return view('prices');
});

Route::get('/login', function (){
    return view('login');
});

Route::get('/registreren', function (){
    return view('registreren');
});
