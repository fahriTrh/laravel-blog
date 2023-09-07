<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        user::create([
            'name' => 'Fahri',
            'user_name' => 'Far',
            'email' => 'far@gmail.com',
            'password' => bcrypt('12345')
        ]);
        User::factory(4)->create();
        Post::factory(10)->create();


        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);


        // user::create([
        //     'name' => 'Near',
        //     'email' => 'near@gmail.com',
        //     'password' => bcrypt('123456')
        // ]);

        // user::create([
        //     'name' => 'Mello',
        //     'email' => 'mello@gmail.com',
        //     'password' => bcrypt('1234567')
        // ]);

        Category::create([
            'name' => 'Web Programing',
            'slug' => 'web-programing'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        // Post::create([
        //     'title' => 'Judul Satu',
        //     'slug' => 'judul-satu',
        //     'excerpt' => 'excerpt1',
        //     'article' => 'lorem ipsum satu',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Dua',
        //     'slug' => 'judul-dua',
        //     'excerpt' => 'excerpt2',
        //     'article' => 'lorem ipsum dua',
        //     'category_id' => 1,
        //     'user_id' => 2
        // ]);

        // Post::create([
        //     'title' => 'Judul Tiga',
        //     'slug' => 'judul-tiga',
        //     'excerpt' => 'excerpt3',
        //     'article' => 'lorem ipsum tiga',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Empat',
        //     'slug' => 'judul-empat',
        //     'excerpt' => 'excerpt4',
        //     'article' => 'lorem ipsum empat',
        //     'category_id' => 3,
        //     'user_id' => 3
        // ]);
        
    }
}
