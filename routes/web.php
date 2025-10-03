<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/blog', function(){
    return view("blog",['title' => 'Blog', 'posts' => 
    [
        [
            'id' => 1,
            'judul' => 'Artikel pertama',
            'author' => 'Raihan Rafi',
            'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolorem, praesentium velit. Autem, enim totam pariatur, adipisci rerum dolore quis repellendus molestiae ab reprehenderit eligendi, sit iure illo. Animi, necessitatibus sapiente!'
        ],
    
        [
            'id' => 2,
            'judul' => 'Artikel kedua',
            'author' => 'Raihan Rafi',
            'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolorem, praesentium velit. Autem, enim totam pariatur, adipisci rerum dolore quis repellendus molestiae ab reprehenderit eligendi, sit iure illo. Animi, necessitatibus sapiente!'
        ]
    ]
]);
});

Route::get('/blog/{id}', function($id){
    $posts = [
    [
        'id' => 1,
        'judul' => 'Artikel pertama',
        'author' => 'Raihan Rafi',
        'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolorem, praesentium velit. Autem, enim totam pariatur, adipisci rerum dolore quis repellendus molestiae ab reprehenderit eligendi, sit iure illo. Animi, necessitatibus sapiente!'
    ],

    [
        'id' => 2,
        'judul' => 'Artikel kedua',
        'author' => 'Raihan Rafi',
        'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolorem, praesentium velit. Autem, enim totam pariatur, adipisci rerum dolore quis repellendus molestiae ab reprehenderit eligendi, sit iure illo. Animi, necessitatibus sapiente!'
    ]
    ];

    $post = Arr::first($posts, function($post) use ($id){
        return $post['id'] == $id;
    }

    );

    return view('article', ['title' => 'Single Post', 'post' => $post]);

});