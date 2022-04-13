<?php

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/log_out', 'HomeController@log_out')->name('log_out');

Route::get('/', 'HomepageController@index')->name('index');

Route::get('/services', 'HomepageController@services')->name('services');
Route::get('/service/{id?}/{name?}', 'HomepageController@service')->name('service');

Route::get('/about', 'HomepageController@about')->name('about');

Route::get('/contact', 'HomepageController@contact_us')->name('contact');
Route::post('/contact_post', 'HomepageController@contact_post')->name('contact_post');

Route::get('/post/details/{id?}/{name?}', 'HomepageController@post')->name('post');
Route::get('/blog', 'HomepageController@blog')->name('blog');

Route::post('/newsletter', 'HomepageController@newsletter')->name('newsletter');

Route::get('/change_language/{lang?}', 'HomepageController@change_language')->name('change_language');
