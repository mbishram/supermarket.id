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
Route::get('/', 'PagesController@index');
// About
Route::get('/about', 'PagesController@about');
// Checkout
Route::get('/checkout', 'PagesController@checkout');
// Contact
Route::get('/contact', 'PagesController@contact');
// FAQ
Route::get('/faq', 'PagesController@faq');
// Login
Route::get('/login', 'PagesController@login');
// Offers
Route::get('/offers', 'PagesController@offers');
// Products
Route::get('/products', 'PagesController@products');
// Register
Route::get('/register', 'PagesController@register');
// Item
Route::get('/item', 'PagesController@item');
