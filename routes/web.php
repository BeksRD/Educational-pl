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

Route::get('/', function () {
    return view('homepage');
});

Route::get('/about',function (){
    return view('about');
});

Route::get('/courses',function (){
   return view('courses');
});

Route::get('/events',function (){
   return view('events');
});

Route::get('/teachers',function (){
    return view('teachers');
});

Route::get('/blog',function (){
    return view('blog');
});

Route::get('/shop',function (){
    return view('shop');
});

Route::get('/contacts',function (){
    return view('contacts');
});
