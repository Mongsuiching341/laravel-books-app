<?php

use App\Http\Controllers\Simplecontroller;
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

Route::get('/hi', function () {
    return 'Hello, world!';
});

Route::controller(Simplecontroller::class)->group(function () {


    Route::post('/user-name', 'getUserName');
    Route::get('/user-agent', 'getUserAgent');
    Route::get('/pagenum', 'pageQuery');
    Route::get('/json', 'jsonRes');
    Route::post('/avatar', 'handleFile');
    Route::get('/token', 'cookieRemTok');
    Route::post('/submit', 'submit');
});
