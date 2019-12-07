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

Route::get('/', 'Articles\\HomepageController')->name('home');

Route::get('/oep/{path?}', function () {
    return view('oep');
});

Route::get(
    'exhibitions/{exhibition}/section/{section}/media',
    'Exhibitions\\SectionMediaController'
)->name('section.media.index');

Route::get(
    'exhibitions/{exhibition}/media',
    'Exhibitions\\ExhibitionMediaController'
)->name('exhibition.media.index');

Route::post(
    'exhibitions/{exhibition}/section/{section}/media',
    'Exhibitions\\UploadMediaController'
)->name('section.media.store');

Route::post(
    'exhibitions/{exhibition}/media',
    'Exhibitions\\UploadMediaController'
)->name('exhibition.media.store');

Route::put(
    'exhibitions/{exhibition}/section/{section}/cover/{media}',
    'Exhibitions\\SectionThumbnailController'
)->name('section.cover');

Route::put(
    'exhibitions/{exhibition}/cover/{media}',
    'Exhibitions\\ExhibitionCoverController'
)->name('exhibitions.cover');

Route::delete('exhibitions/media/{media}', 'Exhibitions\\DeleteMediaController')
    ->name('media.destroy');

Route::resource('exhibitions', 'Exhibitions\\ExhibitionController');

Route::resource(
    'exhibitions/{exhibition}/section',
    'Exhibitions\\SectionController'
)->except(['index']);

// front controller for exhibitions react app
/* 
Route::get('/exhibitions/{path?}', function () {
    return view('exhibition.app');
})->name('exhibitions.app');
 */

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
    Route::get('/home', 'HomeController@index')->name('admin_home');
});

Auth::routes([
    'register' => false
]);

Route::get('article/collections', 'Articles\\RedirectToCollections');

Route::get('article/exhibitions', 'Articles\\RedirectToExhibitions');

Route::get('event/upcoming', 'Events\\UpcomingEventsController')
    ->name('event.upcoming');

Route::get('event/past', 'Events\\PastEventsController')
    ->name('event.past');

Route::resources([
    'article' => 'ArticleController',
    'news' => 'NewsController',
    'essay' => 'EssayController',
    'event' => 'EventController',
    'collection' => 'CollectionController'
]);

Route::resource('collection/{collection}/item', 'ItemController')->except(['index']);
/* 
Route::get('upload', 'Collection\\UploadsController@create');

Route::post('upload/item', 'Collection\\UploadsController@store');

Route::get('addCaptions', 'Collection\AddCaptionsController@edit')
    ->name('addCaptions'); */

Route::post('editor/upload', 'UploadsController');
