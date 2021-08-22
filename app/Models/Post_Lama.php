<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Andy yang",
            "post" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis voluptas distinctio quia molestias, minima quasi porro, qui, vitae laboriosam asperiores repudiandae optio dolore ab sit debitis labore? Fugiat voluptate facilis aspernatur sint voluptatum perspiciatis asperiores veniam, similique porro eveniet doloribus modi nihil ex. Quasi mollitia corporis cum quam aliquam tempora? Voluptate quia, vero dolores facere alias iusto quod tempore nesciunt nemo error magnam repellat ipsum esse eius asperiores quo voluptatibus neque explicabo reprehenderit deleniti repellendus nam consequatur. Nihil, ipsa veritatis?"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Someone",
            "post" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Odio dolorum repudiandae velit voluptates quos ducimus! Rem, earum commodi. Quis, quos error. In maxime vel totam, nulla porro labore numquam delectus ullam obcaecati excepturi, beatae soluta hic! Nesciunt nemo suscipit, ad, officiis commodi molestiae cupiditate nihil velit alias aut minus facere in iusto saepe libero sint accusantium. Quae deserunt voluptas facilis enim ex odio consectetur, quos modi. Tenetur, ratione? Culpa ducimus dolor excepturi quis pariatur sapiente quas nam molestias iste, doloremque reprehenderit qui quos, maxime cum. Esse repellat dolore ex! Dolorem, ea! Nulla maiores iste accusamus eligendi atque fugiat ex nostrum."
        ],
    ];

    public static function allPost()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::allPost();
        // $post = [];
        // foreach ($posts as $p) {
        //     if ($p["slug"] === $slug) {
        //         $post = $p;
        //     }
        // }

        return $posts->firstWhere('slug', $slug);
    }
}
