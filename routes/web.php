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

use App\Http\Middleware\IsAdmin;

Auth::routes();

Route::get('/', 'HomeController@index');

Route::group(['middleware' => ['IsAdmin']], function () {
    //
      Route::get('/user','UserController@index');
	Route::get('/feedback','FeedbackController@index');
	Route::get('/categorymanagement','CategoryController@index');
	Route::get('/items', 'Itemcontroller@index');



});

    
    Route::get('/users/edit/{id}','UserController@edit');
	Route::post('/users/update/','UserController@update');
	Route::delete('/users/delete/{id}','UserController@delete');

// post for save data to db and get for retrieving
Route::get('/found_items','ItemController@foundItems');
Route::get('/lost_items','ItemController@lostItems');
Route::post('/post/create','ItemController@store');

Route::post('/user/register','Auth\RegisterController@create');

Route::post('/register/admin','adminController@re_create');

Route::get('/item/{id}/show/contact','HomeController@showItemContactDetails');

Route::get('/item/{id}/show/quick/view','HomeController@showItemQuickView');

Route::get('/home','HomeController@index')->name('home');


Route::post('/home','FeedbackController@store');
Route::post('/dashboard/category','Categorycontroller@store');
Route::delete('/category/{id}/delete','Categorycontroller@delete');
Route::get('/category/{id}/edit','Categorycontroller@edit');
Route::post('/category/{id}/update','Categorycontroller@update');







