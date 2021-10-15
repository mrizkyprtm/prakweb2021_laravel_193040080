<?php

namespace App\Models;


class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Rizky",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque autem consequatur inventore sed omnis dolores? Quos quisquam dolore, omnis, soluta sapiente pariatur aspernatur voluptatem tempore eligendi laudantium dolorum et consequatur harum ducimus corrupti. Iure maiores non deserunt unde pariatur. Obcaecati, incidunt distinctio eligendi omnis voluptates illum quod aliquid architecto necessitatibus quis adipisci ipsam rerum asperiores accusamus dolorem qui minima labore velit vero culpa nobis? Possimus cum commodi distinctio sint voluptatibus vero quos. Voluptate laudantium repellat dicta debitis? Maxime, aspernatur doloribus."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Pratama",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque autem consequatur inventore sed omnis dolores? Quos quisquam dolore, omnis, soluta sapiente pariatur aspernatur voluptatem tempore eligendi laudantium dolorum et consequatur harum ducimus corrupti. Iure maiores non deserunt unde pariatur. Obcaecati, incidunt distinctio eligendi omnis voluptates illum quod aliquid architecto necessitatibus quis adipisci ipsam rerum asperiores accusamus dolorem qui minima labore velit vero culpa nobis? Possimus cum commodi distinctio sint voluptatibus vero quos. Voluptate laudantium repellat dicta debitis? Maxime, aspernatur doloribus."
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
