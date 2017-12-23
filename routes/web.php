<?php

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

//Auth
Route::get('signup',[
    'uses'  => 'AuthController@getSignup',
    'as'    => "user.getSignup"
]);

Route::post('signup',[
    'uses'  => 'AuthController@postSignUp',
    'as'    => "user.postSignup"
]);

Route::get('signin',[
    'uses'  => 'AuthController@signin',
    'as'    => "signin"
]);

Route::get('/', [
    "uses" =>"ProductController@getIndex",
    "as"   => "product.index"
]);


