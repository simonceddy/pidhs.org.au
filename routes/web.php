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

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
    Route::get('/home', 'HomeController@index')->name('admin_home');
});

Auth::routes([
    'register' => false
]);

Route::resources([
    'article' => 'ArticleController',
    'news' => 'NewsController',
    'essay' => 'EssayController',
    'event' => 'EventController',
    'meetings' => 'MeetingController',
    'collection/item' => 'ItemController',
    'collection' => 'CollectionController',
    'exhibitions' => 'ExhibitionController'
]);
