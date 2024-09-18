<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Post
{
    public static function all()
    {
        return [
            [
                'slug' => 'judul-artikel-1',
                'title' => 'Judul Artikel 1',
                'author' => 'Revy Pramana',
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet vel sunt blanditiis optio aut fugit a hic ipsum modi cum esse quos cupiditate quae quo accusantium quasi laudantium, dolor eum!'

            ],
            [
                'slug' => 'judul-artikel-2',
                'title' => 'Judul Artikel 2',
                'author' => 'Revy Pramana',
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet vel sunt blanditiis optio aut fugit a hic ipsum modi cum esse quos cupiditate quae quo accusantium quasi laudantium, dolor eum!'
            ]
        ];
    }

    public static function find($slug): array
    {
        $post = Arr::first(static::all(), fn($post) => $post['slug'] == $slug);

        if (! $post) {
            abort(404);
        }

        return $post;
    }
}
