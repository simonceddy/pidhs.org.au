<?php
use App\Exhibitions\Exhibition;
use App\Exhibitions\Section;

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

Route::get('/mob/{path?}', function () {
    return view('mobile');
});

Route::get(
    'exhibitions/{exhibition}/section/{section}/media',
    'Exhibitions\\ManageMediaController'
)->name('media.index');

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
