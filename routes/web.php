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

    Route::get('/', 'HomeController@index')->name('home.index');
    Route::get('/home', 'HomeController@index')->name('home.index');
    Route::get('/produk', 'HomeController@produk')->name('home.produk');
    Route::get('/produk/food', 'HomeController@product_list')->name('produk.food');
    Route::get('/produk/drink', 'HomeController@product_list')->name('produk.drink');
    Route::get('/produk/detail/{id}', 'HomeController@product_detail')->name('produk.detail');
    Route::get('/produk/detail', 'HomeController@product_detail')->name('produk.detail');
    Route::get('/produk/like', 'HomeController@product_like')->name('produk.like');
    Route::get('/produk/rating', 'HomeController@product_rating')->name('produk.rating');
    Route::get('/near-me', 'HomeController@near_me')->name('home.nearme');
    Route::get('/area', 'HomeController@area')->name('home.area');
    Route::get('/area/change', 'HomeController@area_change')->name('area.change');
    Route::get('/area/detail', 'HomeController@area_detail')->name('area.detail');
    Route::get('/home/faq', 'HomeController@faq')->name('home.faq');

    Route::get('/redirect', 'SocialAuthFacebookController@redirect')->name('fb-login');
    Route::get('/callback', 'SocialAuthFacebookController@callback');

    Route::get('be', 'HomeController@be')->name('be.index');
    Route::get('be/index', 'HomeController@be')->name('be.index');

    Route::resource('be/faq', 'FaqController');
    Route::resource('be/kategori', 'KategoriController');
    Route::resource('be/pengaturan', 'PengaturanController');
    Route::resource('be/produk', 'ProdukController');
