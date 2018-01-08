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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();


Route::get('/redirect', 'SocialAuthFacebookController@redirect');
Route::get('/callback', 'SocialAuthFacebookController@callback');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/place', 'PlaceController@index')->name('place');

Route::get('/about', function(){ return view('about');})->name('about');

Route::get('/myreviews', function (){
    $reviews = \App\Model\Review::where('user_id', Auth::id())->get();
    return view("myreviews",['reviews' => ($reviews?$reviews:[])]);
});

Route::group(['prefix' => '/place'], function(){
    Route::get('/', 'PlaceController@index');
    Route::get('/{id}', 'PlaceController@show')->name('place');
    Route::get('/{id}/review', 'ReviewsController@create');

    Route::post('/{id}/store', 'ReviewsController@store');
    /*Route::group(['prefix' => '/cliente'], function(){
        Route::get('cadastrar', 'ClientsController@cadastrar');
    });*/

});