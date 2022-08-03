<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Rizal",
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Impedit facilis laudantium ratione, esse consectetur sit debitis veniam voluptas! Excepturi, quas? Quidem sit veniam excepturi voluptatem! Eum veritatis non enim quidem!"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Dini",
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Impedit facilis laudantium ratione, esse consectetur sit debitis veniam voluptas! Excepturi."
        ]
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();

        return $posts->firstWhere('slug', $slug);
    }
}
