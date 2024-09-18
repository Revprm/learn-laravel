<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Arr;

Route::get('/', function () {
    return view('home', ['title' => 'Home page']);
});


Route::get('/about', function () {
    return view('about', ['nama' => 'Revy Pramana', 'title' => 'About']);
});

Route::get('/posts', function () {
    return view('posts', [
        'title' => 'Blog',
        'posts' => [
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
        ]
    ]);
});

Route::get('/posts/{slug}', function ($slug) {
    $posts = [
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

    $post = Arr::first($posts, function($post) use ($slug) {
        return $post['slug'] == $slug;
    });
    
    return view('post', ['title' => 'Single Post', 'post' => $post]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});
