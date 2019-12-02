<?php

Route::view('/' ,'home');
Route::view('about' ,'about');
Route::get('contact' , 'ContactFormController@create');
Route::post('contact' , 'ContactFormController@store');

Route::get('customers' ,'customerController@index');
Route::get('customers/create' ,'customerController@create');
Route::post('customers' ,'customerController@store');
Route::get('customers/{customer}' , 'customerController@show')->name('customers.show');
Route::get('customers/{customer}/edit' , 'customerController@edit')->name('customers.edit');
Route::patch('customers/{customer}' , 'customerController@update')->name('customers.update');
Route::delete('customers/{customer}' , 'customerController@destroy');
// Route::delete('customers/{customer}' , 'customerController@destroy')->middleware('can:delete, customer');mw not working

//  Route::resource('customers' , 'CustomerController');


Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');


