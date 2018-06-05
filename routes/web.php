<?php

//Posty

Route::get('/', [
    'uses' => 'PostsController@index',
    'as' => 'posts.index'
]);

Route::get('posts/create', [
    'uses' => 'PostsController@create',
    'as' => 'posts.create'
]);

Route::get('posts/edit/{posts}', [
    'uses' => 'PostsController@edit',
    'as' => 'posts.edit'
]);

Route::put('posts/{posts}', [
    'uses' => 'PostsController@update',
    'as' => 'posts.update'
]);

Route::post('/posts', [
   'uses' => 'PostsController@store',
    'as' => 'posts.store'
]);

Route::get('posts/{posts}', [
    'uses' => 'PostsController@show',
    'as' => 'posts.show'
]);

Route::delete('posts/{posts}', [
    'uses' => 'PostsController@destroy',
    'as' => 'posts.delete'
]);



// CommentsController - komentarze

Route::post('/posts/{posts}/comments', 'CommentsController@store');


Route::delete('/posts/{posts}/comments}', [
    'uses' => 'CommentsController@destroy',
    'as' => 'comments.delete'
]);

//Controller Tagów

Route::get('posts/tags/{tags}', [
    'uses' => 'TagsController@index',
    'as' => 'tags.index'
]);

//PagesControllery - kontrolery podstron

Route::get('/about', 'PagesController@about');



Route::get('/contact', 'PagesController@contact');

Route::post('contact', [
    'uses' => 'PagesController@store',
    'as' => 'pages.store'
]);

Route::get('messages', [
    'uses' => 'PagesController@index',
    'as' => 'messages.index'
]);


//Logowanie

Auth::routes();

Route::get('/logowanie', 'LoginController@index');
