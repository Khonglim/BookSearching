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
Route::resource('shelfchange', 'ShelfChangeController');
Route::get('/home/{id}','HomeController@destroy')->name('home');


Route::get('home','ShelfChangeController@index')->name('home');
Route::resources([
    'bookshow' => 'BookSECController',
    'posts' => 'PostController'
]);
Route::get('addAndRemove', 'HomeController@ajaxRequest');
Route::post('ajaxRequest', 'HomeController@ajaxRequestPost');
Route::get('addXY', 'HomeController@update');


Route::post('codexworld','CodewoldController@ajaxRequestPost');
Route::get('index', 'CodewoldController@index');


Route::post('bookshelf','BookcshelfController@ajaxRequestPost');
Route::get('editBook/{id}', 'BookcshelfController@index');


Route::post('allposts', 'PostController@getUsers' )->name('dataProcessing');


Route::get('locationShow/{id}','BookcshelfController@locationshow');
