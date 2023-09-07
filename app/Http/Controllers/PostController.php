<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;

class PostController extends Controller
{
    public function index() {
        // dd(request('search'));
        $title = '';
        if (request('category')) {
            $category = Category::firstWhere('slug', request('category'))->name;
            $title = ' in ' . $category;
        }

        if (request('author')) {
            $author = User::firstWhere('user_name', request('author'))->user_name;
            $title = ' by: ' . $author;
        }

        return view('posts.index', [
            'title' => 'All Posts' . $title,
            'posts' => Post::latest()->search(request('search'))->category(request('category'))->author(request('author'))->paginate(4)->withQueryString()
            // 'posts' => Post::all()
        ]);
    }

    public function show(Post $post) {
        return view('posts.show', [
            'title' => 'Single Post',
            'post' => $post->load('user', 'category')
        ]);
    }
}