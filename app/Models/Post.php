<?php

namespace App\Models;

use Illuminate\Support\Arr; 

class Post
{
    public static function all()
    {
        return [
            [
                'id' => 1,
                'judul' => 'Artikel pertama',
                'author' => 'Raihan Rafi',
                'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit...'
            ],
            [
                'id' => 2,
                'judul' => 'Artikel kedua',
                'author' => 'Raihan Rafi',
                'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit...'
            ],
            [
                'id' => 3,
                'judul' => 'Artikel ketiga',
                'author' => 'Raihan Rafi',
                'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit...'
            ]
        ];
    }

    public static function find($id)
    {
        return Arr::first(static::all(), function ($post) use ($id) {
            return $post['id'] == $id;
        });
    }
}
