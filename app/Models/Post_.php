<?php

namespace App\Models;


class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Briant Jasper",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga doloribus sunt quae quisquam nesciunt asperiores voluptas amet explicabo optio! Voluptates incidunt animi hic similique ducimus fugit impedit cupiditate tempore voluptas."
        ],
        [
            "title" => "Judul Post kedua",
            "slug" => "judul-post-kedua",
            "author" => "Briant 2",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga doloribus sunt quae quisquam nesciunt asperiores voluptas amet explicabo optio! Voluptates incidunt animi hic similique ducimus fugit impedit cupiditate tempore voluptas."
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
