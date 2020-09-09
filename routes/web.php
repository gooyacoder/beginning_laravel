<?php

use App\Article;
use App\Tag;

Route::get('/', function () {
	$articles = Article::all();
	$tags = Tag::all();
	return view('welcome', ['articles' => $articles, 'tags' => $tags]);
});

Route::get('/', function () {
    return view('welcome');
});

Route::resource('tasks', 'TaskController');
