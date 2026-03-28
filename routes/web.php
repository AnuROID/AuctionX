<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BidContoller;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard',function(){
    return view('dashobard.index');
});
Route::get('/signup', function () {
    return view('auth.signup');
});
Route::post('/signup',[AuthController::class,'signup']);

Route::get('/login', function () {
    return view('auth.login');
});
Route::post('login',[AuthController::class, 'login']);
Route::post('/logout',[AuthController::class, 'logout']);

Route::middleware('auth')->group(function(){
Route::get('/dashboard',[ProductController::class,'index']);
Route::get('/sell',[ProductController::class,'create']);
Route::post('/sell',[ProductController::class,'store']);

Route::get('/products/{id}',[ProductController::class,'show']);
Route::post('/bid/{productId}',[BidContoller::class,'store']);

});
