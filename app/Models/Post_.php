<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
        [
            'title' => 'Darul Gulag INC Dibuka',
            'slug' => 'darul-gulag-inc-dibuka',
            'author' => 'Gus Garox',
            'article' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima ab voluptas dolorem vel tempore sit autem libero hic repudiandae nostrum! Quas accusamus est ipsam fugiat id iste quia eligendi dolorem ipsa impedit. Dolore saepe cum est velit quia quod nostrum!'
        ],
        [
            'title' => 'Diam Adalah Emas',
            'slug' => 'diam-adalah-emas',
            'author' => 'Cak Geh',
            'article' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Accusantium sint numquam quam quaerat exercitationem ad nobis molestiae eveniet, neque provident eaque, quia veniam. Quam recusandae officiis voluptatibus sunt blanditiis quibusdam asperiores inventore deleniti! Mollitia repellendus quod inventore eum necessitatibus, id cumque eius iusto neque voluptatem magnam iste dolores? Omnis, quia.'
        ]
    ];

    public static function all() {
        return collect(self::$blog_posts);
    }

    public static function find($slug) {
        $posts = static::all();
        
        // foreach (self::$blog_posts as $p) {
        //     if ($p['slug'] === $slug) {
        //         $post = $p;
        //     }
        // }

        return $posts->firstWhere('slug', $slug);
    }
}
