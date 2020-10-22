<?php

use App\Post;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/about', function () {
    return view('Pages.about');
});
Route::get('/services', function () {

    $services=['Web development','App Development','SEO Optimization'];


    return view('pages.services')->with('services',$services);
});

Route::resource('posts','PostController');


