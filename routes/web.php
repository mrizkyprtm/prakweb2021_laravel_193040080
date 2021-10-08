<?php

use Illuminate\Support\Facades\Route;

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
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Mochamad Rizky Pratama",
        "email" => "mrizkyprtm28@gmail.com",
        "image" => "profile.jpg"
    ]);
});

Route::get('/blog', function () {
    $blog_posts = [
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
    return view('posts', [
        "title" => "Posts",
        "posts" => $blog_posts
    ]);
});

// halaman single post
Route::get('posts/{slug}', function ($slug) {
    return view('post', [
        "title" => "Single Post"
    ]);
});
