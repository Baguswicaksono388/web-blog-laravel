<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-pos-pertama",
            "author" => "Bagus",
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Itaque quam fugit similique laudantium dignissimos et dolorum hic fuga, optio, unde, perferendis voluptatum quae. Ducimus unde, blanditiis consequuntur quibusdam minus necessitatibus rem quod repellendus pariatur facere nobis minima accusamus dolorem? Laboriosam eius ab odit libero expedita nesciunt enim voluptas temporibus, hic excepturi aliquid ipsum dolorem minus provident amet ullam, quasi obcaecati blanditiis ipsam esse molestias consectetur deserunt. Obcaecati, itaque voluptatibus repudiandae facilis nemo architecto nihil saepe laboriosam dolor, commodi veniam accusantium!"
        ],
        [
            "title" => "Judul Post Kedua",
            "author" => "Bambang",
            "slug" => "judul-pos-kedua",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit, recusandae. Fugit maiores blanditiis magnam earum! Quisquam veritatis doloremque ut et adipisci quidem necessitatibus perferendis maxime voluptates quod temporibus voluptas ipsam praesentium, dolorum, reprehenderit id perspiciatis atque eveniet similique magnam quia animi excepturi nesciunt neque? Similique, blanditiis nisi! Nesciunt harum praesentium beatae, voluptatum minus esse voluptas fugit, labore perspiciatis voluptates est! Laborum corporis obcaecati voluptatem ex perferendis? Culpa animi veniam labore voluptatem magni consectetur quas expedita perspiciatis iste dolorem, doloribus blanditiis eveniet sint, cumque repudiandae delectus minima quos soluta consequatur quibusdam maxime optio! Nemo dignissimos, voluptatem odio ab nobis quas itaque."
        ],
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();

        // $post = [];
        // foreach ($posts as $p) {
        //     if ($p["slug"] === $slug) {
        //         $post = $p;
        //     }
        // }

        return $posts->firstWhere('slug', $slug);
    }
}
