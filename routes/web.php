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
    return view('welcome');
});

Route::get('/admin', function () {
    return view('admin.index');
})->name('admin.index');

Route::get('/admin/blank', function () {
    return view('admin.blank');
});

// Posts
Route::get('/admin/posts', 'PostsController@index')->name('admin.posts.index');
Route::get('/admin/post/add', 'PostsController@create')->name('admin.posts.create');
Route::post('/admin/post/add', 'PostsController@store')->name('admin.posts.store');
Route::get('/admin/post/{posts}/edit', 'PostsController@edit')->name('admin.posts.edit');
Route::post('/admin/post/{posts}/update', 'PostsController@update')->name('admin.posts.update');
Route::get('/admin/post/{posts}/destroy', 'PostsController@destroy')->name('admin.posts.destroy');

Route::get('/admin/categories', 'CategoryController@index')->name('admin.category.index');

// Bairshil
Route::get('/admin/bairshil', 'BairshilController@index')->name('admin.bairshil.index');
Route::post('/admin/bairshil/store', 'BairshilController@store')->name('admin.bairshil.store');
Route::get('/admin/bairshil/{bairshil}/edit', 'BairshilController@edit')->name('admin.bairshil.edit');
Route::get('/admin/bairshil/{bairshil}/destroy', 'BairshilController@destroy')->name('admin.bairshil.destroy');

// Category
Route::get('/admin/categories', 'CategoryController@index')->name('admin.category.index');
Route::post('/admin/categories', 'CategoryController@store')->name('admin.category.store');
Route::get('/admin/category/{category}/edit', 'CategoryController@edit')->name('admin.category.edit');
Route::post('/admin/category/{category}/update', 'CategoryController@update')->name('admin.category.update');
Route::get('/admin/category/{category}/destroy', 'CategoryController@destroy')->name('admin.category.destroy');

// News
Route::get('/admin/news', 'NewsController@index')->name('admin.news.index');
Route::get('/admin/news/add', 'NewsController@create')->name('admin.news.create');
Route::post('/admin/news/add', 'NewsController@store')->name('admin.news.store');
Route::get('/admin/news/{news}/edit', 'NewsController@edit')->name('admin.news.edit');
Route::post('/admin/news/{news}/update', 'NewsController@update')->name('admin.news.update');
Route::get('/admin/news/{news}/destroy', 'NewsController@destroy')->name('admin.news.destroy');

// FileBrowser
Route::get('/admin/filebrowser', 'ImagesController@index')->name('admin.filebrowser.index');
Route::post('/admin/filebrowser', 'ImagesController@store')->name('admin.filebrowser.store');

// Agents
Route::get('/admin/agents', 'AgentsController@index')->name('admin.agents.index');
Route::get('/admin/agents/add', 'AgentsController@create')->name('admin.agents.create');
Route::post('/admin/agents/add', 'AgentsController@store')->name('admin.agents.store');

// Social
Route::get('/admin/socials/{socials}/edit', 'SocialController@edit')->name('admin.socials.edit');
