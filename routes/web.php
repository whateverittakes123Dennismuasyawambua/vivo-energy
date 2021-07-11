<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FeedbackController;

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
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});
<<<<<<< HEAD
Route::get('media',function(){return view('media');});
=======
Route::resource('/contact', FeedbackController::class);

>>>>>>> 00b9b7e59a66853bbdb7896a1a076ceb39f2b5b1







Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
