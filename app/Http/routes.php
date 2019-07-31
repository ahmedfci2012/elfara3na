<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


Route::get('/', 'HomeController@index');

Route::auth();

Route::get('/home', 'HomeController@index');


Route::get('/sections/index', 'SectionController@index');

Route::post ( '/sections/create', 'SectionController@create' );


Route::get('/subsection/index/{section_id}', 'SubSectionController@index');
Route::post ( '/subsections/create', 'SubSectionController@create' );


Route::get('/bills','BillsController@index');

Route::get('/bills/add/{section_id}', 'BillsController@addSectionToBill');

Route::get('/bills/bill', 'BillsController@createBill');

Route::post('/bills/create', 'BillsController@create');

/*
Route::auth();

Route::get('/home', 'HomeController@index');
*/