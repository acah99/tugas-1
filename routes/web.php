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
    return view('index');
});

Route::get('/portfolio', function () {
    return view('portfolio-details');
});


//CRUD Data
Route::get('customer', 'CustomerControllerr@index');
Route::get('customer/create', 'CustomerController@create')->name('customer.create');
Route::post('customer/store', 'CustomerController@store')->name('customer.store');
Route::delete('customer/{id}', 'CustomerController@destroy')->name('customer.delete');
Route::get('customer/edit/{customer}', 'CustomerController@edit')->name('customer.edit'):
Route::patch('customer/update/{customer}', 'CustomerController@update')->name('customer.update'):



