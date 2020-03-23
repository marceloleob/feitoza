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
    Route::get('gallery', 'GalleryController@index')->name('gallery');
    // reviews
    Route::get('reviews', 'reviewController@index')->name('review');
    // About Us
    Route::get('about-us', 'AboutController@index')->name('about');
    // Contact Us
    Route::get('contact-us', 'ContactController@index')->name('contact');
    Route::post('send', 'ContactController@index')->name('send');
});

/**
 * Rotas protegidas do Admin
 */
Route::group(['namespace' => 'Admin', 'prefix' => 'admin', 'middleware' => 'auth'], function () {
    // Home
    Route::get('/', 'DashboardController@index')->name('dashboard');

    // Services
    Route::get('services', 'ServicesController@index')->name('service.list');
    Route::get('service', 'ServicesController@create')->name('service.new');
    Route::get('services/{service?}', 'ServicesController@create')->name('service.edit');
    Route::post('services', 'ServicesController@store')->name('service.store');

    // List Services by Pictures
    Route::get('gallery/services', 'PicturesController@index')->name('gallery.services');
    // Form Create new Picture
    Route::get('gallery/picture/new', 'PicturesController@create')->name('gallery.service.new');
    // Form Create or Edit of expecific Service
    Route::get('gallery/service/{service?}', 'PicturesController@create')->name('gallery.service.edit');
    // Form Edit of expecific Picture by Service
    Route::get('gallery/service/{service?}/picture/{picture?}', 'PicturesController@create')->name('gallery.picture.edit');
    // Post Form
    Route::post('gallery/picture', 'PicturesController@store')->name('gallery.picture.store');
    // Delete
    Route::get('gallery/service/{service?}/picture/{picture?}/delete', 'PicturesController@destroy')->name('gallery.picture.destroy');
    // Form Update ShowHome
    Route::get('gallery/service/{service?}/picture/{picture?}/showhome/{showhome?}', 'PicturesController@showHome')->name('gallery.picture.showhome');

    // Reviews List
    Route::get('reviews', 'ReviewsController@index')->name('reviews.list');
    Route::get('review', 'ReviewsController@create')->name('review.new');
    Route::get('review/{id?}', 'ReviewsController@create')->name('review.edit');
    Route::post('review', 'ReviewsController@store')->name('review.store');
    Route::get('review/delete/{id?}', 'ReviewsController@destroy')->name('review.destroy');
});

/**
 * Rotas de Autenticacao
 */
Auth::routes(
    [
        'register' => false,
    ]
);
