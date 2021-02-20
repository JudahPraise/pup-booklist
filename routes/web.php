<?php

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

Route::get('/', function(){
    return view('auth.login');
});

Route::prefix('book')->group(function(){
    Route::get('/', 'BookController@index')->name('book.index');
    Route::get('/create', 'BookController@create')->name('book.create');
    Route::post('/store', 'BookController@store')->name('book.store');
    Route::get('/show/{id}', 'BookController@show')->name('book.show');
    Route::get('/edit/{id}', 'BookController@edit')->name('book.edit');
    Route::put('/update/{id}', 'BookController@update')->name('book.update');

});
Route::get('/report','ReportController@index')->name('report');

Route::prefix('research')->group(function(){
    Route::get('/', 'ResearchController@index')->name('research.index');
    Route::get('/create', 'ResearchController@create')->name('research.create');
    Route::post('/store', 'ResearchController@store')->name('research.store');
    Route::get('/edit/{id}', 'ResearchController@edit')->name('research.edit');
    Route::put('/update/{id}', 'ResearchController@update')->name('research.update');

});

Route::delete('/remove/{id}', 'ResearchersController@delete')->name('researcher.delete');
Route::post('/create/{id}', 'ResearchersController@create')->name('researcher.create');
Route::put('/update/{id}', 'ResearchersController@update')->name('researcher.update');

Route::prefix('/recommendation')->group(function(){
    Route::get('/', 'RecommendationController@index')->name('recommendation.index');
    Route::get('/bsit', 'RecommendationController@filterBsit')->name('recommendation.bsit');
    Route::get('/bsent', 'RecommendationController@filterBsent')->name('recommendation.bsent');
    Route::get('/bbtle', 'RecommendationController@filterBbtle')->name('recommendation.bbtle');
    Route::get('/all', 'RecommendationController@filterAll')->name('recommendation.all');
});

Route::get('/archive/{id}', 'ArchiveController@archive')->name('archive');
Route::get('/archives', 'ArchiveController@index')->name('archive.index');
Route::get('/retrieve/archive/{id}', 'ArchiveController@retrieve')->name('retrieve');
// Route::get('research-archive/{id}', 'ArchiveController@research_archive')->name('research.archive');
// Route::get('research-retrieve/research-archive/{id}', 'ArchiveController@research_retrieve')->name('research.retrieve');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/home-page', function(){
    return view('home-page');
})->name('home.page');
