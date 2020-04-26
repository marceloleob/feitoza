<?php

use Illuminate\Support\Facades\Auth;
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

/**
 * Change Language
 */
// Route::get('locale/{locale?}', function ($locale) {
//     // set new language
//     Session::put('locale', $locale);
//     // go back
//     return redirect()->back();
// });

/**
 * Rotas do Site
 */
Route::group(['namespace' => 'Site'], function () {
    // Home
    Route::get('/', 'HomeController@index')->name('home');
    // Gallery
    Route::get('gallery/{slug?}', 'GalleryController@index')->name('gallery');
    // reviews
    Route::get('reviews', 'ReviewController@index')->name('review');
    // About Us
    Route::get('about-us', 'AboutController@index')->name('about');
    // Contact Us
    Route::get('contact-us', 'ContactController@index')->name('contact');
    Route::post('send', 'ContactController@send')->name('send');
	Route::get('email-company', 'ContactController@testCompany');
	Route::get('email-customer', 'ContactController@testCustomer');
});

/**
 * Rotas protegidas do Admin
 */
Route::group(['namespace' => 'Admin', 'prefix' => 'admin', 'middleware' => 'auth'], function () {
    // Home
    Route::get('/', 'DashboardController@index')->name('dashboard');
    // Galleries
    Route::get('galleries', 'GalleryController@index')->name('gallery.list');
    Route::any('galleries', 'GalleryController@index')->name('gallery.search');
    Route::get('new-gallery', 'GalleryController@create')->name('gallery.new');
    Route::post('gallery', 'GalleryController@store')->name('gallery.store');
    Route::get('gallery/{id}', 'GalleryController@edit')->name('gallery.edit');
    Route::get('gallery/toggle/{id}', 'GalleryController@toggle')->name('gallery.toggle');
    // Pictures
    Route::get('pictures', 'PictureController@index')->name('picture.list');
    Route::any('pictures', 'PictureController@index')->name('picture.search');
    Route::get('new-picture', 'PictureController@create')->name('picture.new');
    Route::post('create-picture', 'PictureController@store')->name('picture.store');
    Route::get('picture/{id}', 'PictureController@edit')->name('picture.edit');
    Route::post('update-picture', 'PictureController@update')->name('picture.update');
    Route::get('picture/toggle/{id}', 'PictureController@toggle')->name('picture.toggle');
    Route::get('delete-picture/{id}', 'PictureController@delete')->name('picture.delete');
    // Reviews List
    Route::get('reviews', 'ReviewController@index')->name('review.list');
    Route::any('reviews', 'ReviewController@index')->name('review.search');
    Route::get('new-review', 'ReviewController@create')->name('review.new');
    Route::post('review', 'ReviewController@store')->name('review.store');
    Route::get('review/{id}', 'ReviewController@edit')->name('review.edit');
    Route::get('review/toggle/{id}', 'ReviewController@toggle')->name('review.toggle');
});

/**
 * Rotas de Autenticacao
 */
Auth::routes(
    [
        'register' => false,
        'verify'   => true
    ]
);
