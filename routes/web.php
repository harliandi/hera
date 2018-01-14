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
    Route::get('/near-me', 'HomeController@near_me')->name('home.nearme');
    Route::get('/area', 'HomeController@area')->name('home.area');
    Route::get('/area/change', 'HomeController@area_change')->name('area.change');
    Route::post('/area/detail', 'HomeController@area_detail')->name('area.detail');
    Route::get('/home/faq', 'HomeController@faq')->name('home.faq');

    Route::get('be', 'HomeController@be')->name('be.index');
    Route::get('be/index', 'HomeController@be')->name('be.index');

    Route::resource('be/faq', 'FaqController');
    Route::resource('be/kategori', 'KategoriController');
    Route::resource('be/pengaturan', 'PengaturanController');
    Route::resource('be/produk', 'ProdukController');
