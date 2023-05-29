<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserController;
use App\Models\Post;
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

// Route::get('/posts', function () {
//     return view('Home', ['posts' => Post::all()]);
// });

// Route::get('/posts/{post:slug}', function (Post $post) {
//     return view('post', ['post' => $post]);
// });


//task 1 --------------
Route::resource('sign-up', RegisterController::class);

//task 2 ------------
Route::get('/home', [HomeController::class, 'redirectDashboard']);
Route::get('/dashboard', [HomeController::class, 'dashboard']);


// Task 4: Route Middleware--------------- pass query parametre with  pass=1234
Route::middleware('user')->group(function () {

    Route::get('/profile', function () {
        return 'my profile';
    });

    Route::get('/setting', function () {
        return 'setting page';
    });
});


// task 5 ------

Route::resource('products', ProductController::class);


//task -6 ----

Route::post('/contact', ContactController::class);

//task -7
Route::resource('post', PostController::class);
