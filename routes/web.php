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

Route::resource('article', 'ArticleController');

Route::resource('news', 'NewsController')->names('news');

Route::get('/essays', function () {
    return view('welcome');
})->name('essays');

Route::resource('essay', 'EssayController');
Route::resource('event', 'EventController');

Route::get('/meetings', function () {
    return view('welcome');
})->name('meetings');

Route::resource('meeting', 'MeetingController');

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
    Route::get('/home', 'HomeController@index')->name('admin_home');
});

Auth::routes([
    'register' => false
]);

Route::resource('collection/item', 'ItemController');

Route::resource('collection', 'CollectionController');

Route::resource('exhibitions', 'ExhibitionController');
