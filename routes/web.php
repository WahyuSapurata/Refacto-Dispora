<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::group(['namespace' => 'App\Http\Controllers'], function () {

    Route::get('/', 'Dashboard@index')->name('home.index');

    Route::get('/', 'Landing@home')->name('home');
    Route::get('/artikel', 'Landing@artikel')->name('artikel');
    Route::get('/detail-artikel/{params}', 'Landing@detail_artikel')->name('detail-artikel');
    Route::post('/like-artikel/{params}', 'PostingController@like')->name('like-artikel');
    Route::get('/get-like-artikel/{params}', 'PostingController@get_like')->name('get-like-artikel');
    Route::delete('/unlike-artikel/{params}', 'PostingController@unlike')->name('unlike-artikel');
    Route::post('/view/{params}', 'PostingController@view')->name('view');

    Route::get('/event-landing', 'Landing@event')->name('event-landing');
    Route::get('/detail-event/{params}', 'Landing@detail_event')->name('detail-event');

    Route::get('/sarana-landing', 'Landing@sarana')->name('sarana-landing');
    Route::get('/detail-sarana/{params}', 'Landing@detail_sarana')->name('detail-sarana');

    Route::get('/galeri-landing', 'Landing@galeri')->name('galeri-landing');
    Route::get('/detail-galeri/{params}', 'Landing@detail_galeri')->name('detail-galeri');

    Route::get('/opendata-landing', 'Landing@open_data')->name('opendata-landing');

    Route::get('/program/{params}', 'Landing@program')->name('program');

    Route::get('/kontak-landing', 'Landing@kontak')->name('kontak-landing');
    Route::get('/selayang-landing', 'Landing@selayang_pandang')->name('selayang-landing');
    Route::get('/visimisi-landing', 'Landing@visi_misi')->name('visimisi-landing');
    Route::get('/struktur-landing', 'Landing@struktur')->name('struktur-landing');
    Route::get('/profil-landing', 'Landing@profil')->name('profil-landing');
    Route::get('/pejabat-landing', 'Landing@pejabat_struktural')->name('pejabat-landing');
    Route::get('/tupoksi-landing', 'Landing@tupoksi')->name('tupoksi-landing');

    Route::group(['prefix' => 'login', 'middleware' => ['guest'], 'as' => 'login.'], function () {
        Route::get('/login-akun', 'Auth@show')->name('login-akun');
        Route::post('/login-proses', 'Auth@login_proses')->name('login-proses');
    });

    Route::group(['prefix' => 'admin', 'middleware' => ['auth'], 'as' => 'admin.'], function () {
        Route::get('/dashboard-admin', 'Dashboard@dashboard_admin')->name('dashboard-admin');

        Route::prefix('manajemen-artikel')->group(function () {
            Route::get('/kategori', 'KategoriController@index')->name('kategori');
            Route::get('/get-kategori', 'KategoriController@get')->name('get-kategori');
            Route::get('/show-kategori/{params}', 'KategoriController@show')->name('show-kategori');
            Route::post('/add-kategori', 'KategoriController@store')->name('add-kategori');
            Route::post('/update-kategori/{params}', 'KategoriController@update')->name('update-kategori');
            Route::delete('/delete-kategori/{params}', 'KategoriController@delete')->name('delete-kategori');

            Route::get('/posting', 'PostingController@index')->name('posting');
            Route::get('/add-view-posting', 'PostingController@add')->name('add-view-posting');
            Route::get('/edit-view-posting/{params}', 'PostingController@edit')->name('edit-view-posting');
            Route::get('/get-posting', 'PostingController@get')->name('get-posting');
            Route::get('/show-posting/{params}', 'PostingController@show')->name('show-posting');
            Route::post('/add-posting', 'PostingController@store')->name('add-posting');
            Route::post('/update-posting/{params}', 'PostingController@update')->name('update-posting');
            Route::delete('/delete-posting/{params}', 'PostingController@delete')->name('delete-posting');
        });

        Route::prefix('manajemen-media')->group(function () {
            Route::get('/album', 'AlbumController@index')->name('album');
            Route::get('/get-album', 'AlbumController@get')->name('get-album');
            Route::get('/show-album/{params}', 'AlbumController@show')->name('show-album');
            Route::post('/add-album', 'AlbumController@store')->name('add-album');
            Route::post('/update-album/{params}', 'AlbumController@update')->name('update-album');
            Route::delete('/delete-album/{params}', 'AlbumController@delete')->name('delete-album');

            Route::get('/galeri', 'GaleriController@index')->name('galeri');
            Route::get('/get-galeri', 'GaleriController@get')->name('get-galeri');
            Route::get('/show-galeri/{params}', 'GaleriController@show')->name('show-galeri');
            Route::post('/add-galeri', 'GaleriController@store')->name('add-galeri');
            Route::post('/update-galeri/{params}', 'GaleriController@update')->name('update-galeri');
            Route::delete('/delete-galeri/{params}', 'GaleriController@delete')->name('delete-galeri');
        });

        Route::get('/event-lading', 'EventController@index')->name('event');
        Route::get('/add-view-event', 'EventController@add')->name('add-view-event');
        Route::get('/edit-view-event/{params}', 'EventController@edit')->name('edit-view-event');
        Route::get('/get-event', 'EventController@get')->name('get-event');
        Route::get('/show-event/{params}', 'EventController@show')->name('show-event');
        Route::post('/add-event', 'EventController@store')->name('add-event');
        Route::post('/update-event/{params}', 'EventController@update')->name('update-event');
        Route::delete('/delete-event/{params}', 'EventController@delete')->name('delete-event');

        Route::get('/sarana', 'SaranaController@index')->name('sarana');
        Route::get('/add-view-sarana', 'SaranaController@add')->name('add-view-sarana');
        Route::get('/edit-view-sarana/{params}', 'SaranaController@edit')->name('edit-view-sarana');
        Route::get('/get-sarana', 'SaranaController@get')->name('get-sarana');
        Route::get('/show-sarana/{params}', 'SaranaController@show')->name('show-sarana');
        Route::post('/add-sarana', 'SaranaController@store')->name('add-sarana');
        Route::post('/update-sarana/{params}', 'SaranaController@update')->name('update-sarana');
        Route::delete('/delete-sarana/{params}', 'SaranaController@delete')->name('delete-sarana');

        Route::prefix('manajemen-data')->group(function () {
            Route::get('/kategori-data', 'KategoriDataController@index')->name('kategori-data');
            Route::get('/get-kategori-data', 'KategoriDataController@get')->name('get-kategori-data');
            Route::get('/show-kategori-data/{params}', 'KategoriDataController@show')->name('show-kategori-data');
            Route::post('/add-kategori-data', 'KategoriDataController@store')->name('add-kategori-data');
            Route::post('/update-kategori-data/{params}', 'KategoriDataController@update')->name('update-kategori-data');
            Route::delete('/delete-kategori-data/{params}', 'KategoriDataController@delete')->name('delete-kategori-data');
        });
    });

    Route::get('/logout', 'Auth@logout')->name('logout');
});
