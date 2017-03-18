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

Route::get('tags', function () {
    $tags = App\Tag::orderBy('name')->get()->groupBy(function ($tag) {
        return substr($tag->name, 0, 1);
    });
    
    return view('tags.index')->withTags($tags);
});
