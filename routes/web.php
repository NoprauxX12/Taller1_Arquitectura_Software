<?php

use App\Http\Controllers\homeController;
use Illuminate\Support\Facades\Route;

Route::get('/', 'App\Http\Controllers\homeController@index')->name('home');
Route::get('/order', 'App\Http\Controllers\orderController@index')->name('order.index');
Route::post('/order', 'App\Http\Controllers\orderController@store')->name('order.store');
Route::get('/order/list', 'App\Http\Controllers\orderController@list')->name('order.list');

