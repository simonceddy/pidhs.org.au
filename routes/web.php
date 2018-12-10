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

// Navbar routes
Route::get('/', 'PageController@home')->name('home');


// About dropdown routes
Route::group(['prefix' => 'about'], function () {
    Route::get('committee', 'PageController@committee')->name('about_committee');

    Route::get('objectives', 'PageController@objectives')
        ->name('about_objectives');

    Route::get('area', 'PageController@area')->name('about_area');
    Route::get('history', 'PageController@soHistory')
        ->name('about_soc_history');
    Route::get('constitution', 'PageController@constitution')
        ->name('about_constitution');
    Route::get('reports', 'PageController@reports')
        ->name('about_reports');
    Route::get('takedown', 'PageController@takedown')
        ->name('about_takedown');
});

/* Route::get('/news', 'NewsController@index')->name('news');

Route::get('/news/{id}', 'NewsController@show'); */

Route::resource('news', 'NewsController');

// Museum dropdown routes
Route::group(['prefix' => 'museum'], function () {

    Route::get('find-us', 'PageController@findUs')
        ->name('museum_find_us');

    Route::get('what-to-do', 'PageController@whatToDo')
        ->name('museum_what_to_do');

    Route::get('books', 'PageController@books')
        ->name('museum_books');

});

Route::get('/events', function() {
    return view('list');
});

Route::get('/contact', 'PageController@contact')
    ->name('contact');

Route::get('/membership', 'PageController@membership')
    ->name('membership');

Route::get('/donate', 'PageController@donate')
    ->name('donate');

// Sidebar routes
Route::get('/services', 'PageController@services')->name('services');

Route::get('/links', 'PageController@links')->name('links');

// Collection/Gallery routes
/* Route::group(['prefix' => 'collection'], function () {
    Route::get('/', function () {
        return view('collections/collections');
    })->name('collection_home');

    Route::get('/{id}', function () {
        return view('collections/collection');
    })->name('collection_view');

    Route::get('/{id}/item/{item}', function () {
        return view('collections/item');
    })->name('collection_item');
});
 */
Route::get('/essays', function () {
    return view('welcome');
})->name('essays');

Route::resource('essay', 'EssayController');

Route::get('/meetings', function () {
    return view('welcome');
})->name('meetings');

Route::resource('meeting', 'MeetingController');

// Admin routes
// TODO: use auth middleware
Route::group(['prefix' => 'admin'], function () {
    Route::get('/home', 'HomeController@index')->name('admin_home');
});

Auth::routes([
    'register' => false
]);

Route::group(['prefix' => 'exhibitions'], function () {
    Route::get('/{path?}', function () {
        return 'exhibitions place holder.';
    });
});

Route::resource('items', 'ItemController');

Route::resource('collection', 'CollectionController');
