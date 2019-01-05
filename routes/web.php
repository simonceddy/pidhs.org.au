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

Route::get('/', function () {
    return (new App\Http\Controllers\ArticleController)->show(
        (new App\Article)->query()->where('slug', '=', 'home')->first()
    );
})->name('home');

// front controller for exhibitions react app
Route::get('/exhibitions/{path?}', function () {
    return view('exhibition.app');
})->name('exhibitions.app');

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
    'collection' => 'CollectionController'
]);

Route::resource('collection/item', 'ItemController')->except(['index']);

Route::resource('pdf', 'PdfController')
    ->except(['update', 'create', 'edit']);
Route::resource('photo', 'PhotoController')
    ->except(['update', 'create', 'edit']);
