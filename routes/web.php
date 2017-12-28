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


Route::group(['prefix'=>"user"], function (){
    Route::group(['middleware'=>'guest'], function (){

        Route::get('/signup',[
            'uses'  => 'AuthController@getSignup',
            'as'    => "user.getSignup"
        ]);

        Route::post('/signup',[
            'uses'  => 'AuthController@postSignUp',
            'as'    => "user.postSignup"
        ]);

        Route::get('/signin',[
            'uses'  => 'AuthController@getSignin',
            'as'    => "user.getSignin"
        ]);

        Route::post('/signin',[
            'uses'  => 'AuthController@postSignin',
            'as'    => "user.postSignin"

        ]);
    });

    Route::group(['middleware'=>'auth'], function(){

        Route::get('/{id}',[
            'uses'  => 'AuthController@getUserProfile',
            'as'    => "user.getUserProfile"
        ]);

    });

});

Route::get('/logout',[
    'uses'  => 'AuthController@userLogout',
    'as'    => "user.logout",
    'middleware'=> 'auth'
]);

Route::get('/', [
    "uses" =>"ProductController@getIndex",
    "as"   => "product.index"
]);

Route::get('/add-to-cart/{id}',[
    'uses'  => 'ProductController@getAddToCart',
    'as'    => "product.getAddToCart"
]);

Route::get('/shopping-cart',[
    'uses'  => 'ProductController@getCart',
    'as'    => "product.shoppingCart"
]);

Route::get('/checkout',[
    'uses'  => 'ProductController@getCheckout',
    'as'    => "checkout"
]);

Route::post('/checkout',[
    'uses'  => 'ProductController@postCheckout',
    'as'    => "checkout"
]);
