<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {


        // User::create([
        //     'name' => 'M. Rizky',
        //     'email' => 'mrizkyprtm28@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        // User::create([
        //     'name' => 'Pratama',
        //     'email' => 'mrpratama@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim dolor laudantium nesciunt architecto maxime error earum ipsa magnam.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim dolor laudantium nesciunt architecto maxime error earum ipsa magnam. Dicta odio minus quibusdam ad eius rerum quasi nesciunt optio quos mollitia magnam illo, harum vero, laborum quia quo autem, voluptatem atque. Cupiditate nesciunt illo dolores quaerat quisquam eos quia? Aliquid saepe mollitia consequuntur sapiente? Omnis non eveniet, vel maxime dolore ad quos hic voluptatem veniam error rem? Deserunt earum quaerat doloribus atque veritatis dolore? Officia commodi veniam quos minus amet culpa pariatur nihil ipsa enim totam excepturi dolor, odit mollitia modi eius eum deserunt adipisci dolores nam necessitatibus. Nulla, voluptatem ducimus!',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Dua',
        //     'slug' => 'judul-ke-dua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim dolor laudantium nesciunt architecto maxime error earum ipsa magnam.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim dolor laudantium nesciunt architecto maxime error earum ipsa magnam. Dicta odio minus quibusdam ad eius rerum quasi nesciunt optio quos mollitia magnam illo, harum vero, laborum quia quo autem, voluptatem atque. Cupiditate nesciunt illo dolores quaerat quisquam eos quia? Aliquid saepe mollitia consequuntur sapiente? Omnis non eveniet, vel maxime dolore ad quos hic voluptatem veniam error rem? Deserunt earum quaerat doloribus atque veritatis dolore? Officia commodi veniam quos minus amet culpa pariatur nihil ipsa enim totam excepturi dolor, odit mollitia modi eius eum deserunt adipisci dolores nam necessitatibus. Nulla, voluptatem ducimus!',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Tiga',
        //     'slug' => 'judul-ke-tiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim dolor laudantium nesciunt architecto maxime error earum ipsa magnam.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim dolor laudantium nesciunt architecto maxime error earum ipsa magnam. Dicta odio minus quibusdam ad eius rerum quasi nesciunt optio quos mollitia magnam illo, harum vero, laborum quia quo autem, voluptatem atque. Cupiditate nesciunt illo dolores quaerat quisquam eos quia? Aliquid saepe mollitia consequuntur sapiente? Omnis non eveniet, vel maxime dolore ad quos hic voluptatem veniam error rem? Deserunt earum quaerat doloribus atque veritatis dolore? Officia commodi veniam quos minus amet culpa pariatur nihil ipsa enim totam excepturi dolor, odit mollitia modi eius eum deserunt adipisci dolores nam necessitatibus. Nulla, voluptatem ducimus!',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Empat',
        //     'slug' => 'judul-ke-empat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim dolor laudantium nesciunt architecto maxime error earum ipsa magnam.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim dolor laudantium nesciunt architecto maxime error earum ipsa magnam. Dicta odio minus quibusdam ad eius rerum quasi nesciunt optio quos mollitia magnam illo, harum vero, laborum quia quo autem, voluptatem atque. Cupiditate nesciunt illo dolores quaerat quisquam eos quia? Aliquid saepe mollitia consequuntur sapiente? Omnis non eveniet, vel maxime dolore ad quos hic voluptatem veniam error rem? Deserunt earum quaerat doloribus atque veritatis dolore? Officia commodi veniam quos minus amet culpa pariatur nihil ipsa enim totam excepturi dolor, odit mollitia modi eius eum deserunt adipisci dolores nam necessitatibus. Nulla, voluptatem ducimus!',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}
