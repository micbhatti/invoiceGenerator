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

Route::get("download-pdf","HomeController@downloadPDF");

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('accounts','InvoicemakersController@index')->name('allaccounts');

Route::get('account/{id}','InvoicemakersController@show')->name('singleAcc');

Route::get('/create','InvoicemakersController@create')->name('createMaker');

Route::post('/create','InvoicemakersController@store')->name('saveMaker');
Route::post('account/{id}','InvoicemakersController@update')->name('updateAccount');
Route::get('delete/{id}','InvoicemakersController@delete')->name('DelAcc');


Route::resource('clients', 'ClientsController');