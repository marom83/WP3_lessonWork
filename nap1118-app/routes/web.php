<?php

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

Route::get('/hello', function(){
    echo 'Maró Melinda';
});

Route::get('/hello2', function(){
   return view('static.hello');
});

Route::get('/random', function(){   
    $number = rand(10, 100);
    return view('static.random',['n'=>$number]);
});