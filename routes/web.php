<?php

use App\Article;
use App\Tag;

// Route::get('/', function () {
// 	$articles = Article::all();
// 	$tags = Tag::all();
// 	return view('welcome', ['articles' => $articles, 'tags' => $tags]);
// });

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::resource('tasks', 'TaskController');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::resource('users', 'UserController');
Route::resource('profiles', 'ProfileController');
Route::resource('articles', 'ArticleController');
Route::resource('comments', 'CommentController');
Route::get('/users/{id}/articles', 'ArticleController@articles');
Route::get('/', 'ArticleController@main');