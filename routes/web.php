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

// Index
Route::get('/', 'PagesController@index')->name('home');
// About
Route::get('/about', 'PagesController@about');
// Checkout
Route::get('/checkout', 'PagesController@checkout')->middleware('auth');
// Contact
Route::get('/contact', 'PagesController@contact');
// FAQ
Route::get('/faq', 'PagesController@faq');
// Login
Route::get('/login', 'PagesController@login')->name('login')->middleware('guest');
// Products
Route::get('/foods', 'PagesController@foods');
Route::get('/necessities', 'PagesController@necessities');
// Promos
Route::get('/promos', 'PagesController@promos');
// Register
Route::get('/register', 'PagesController@register')->middleware('guest');
// Item
Route::get('/item', 'PagesController@item');
// Admin
Route::get('/admin', 'PagesController@admin')->middleware('guest');
Route::get('/dashboard', 'PagesController@dashboard')->middleware('guest');
Route::get('/dashboard/items', 'PagesController@dashboardInputItems')->middleware('guest');

// Backend
// Customer
Route::post('register', 'CustomersAuthController@register');
Route::post('login', 'CustomersAuthController@login');
Route::post('logout', 'CustomersAuthController@logout');

// Items
Route::post('/dashboard/items', 'ItemsController@store');

// Checkout
Route::post('add', 'CheckoutsController@add')->middleware('auth');
Route::post('checkout', 'CheckoutsController@checkout');