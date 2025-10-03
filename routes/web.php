<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Arr;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/blog', function(){
    return view("blog",['title' => 'Blog', 'posts' => Post::all()]);
});

Route::get('/blog/{id}', function($id){

    $post = Post::find($id);
    return view('article', [
        'title' => 'Single Post', 
        'post' => $post]);

});