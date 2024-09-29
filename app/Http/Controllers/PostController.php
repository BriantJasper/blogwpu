<?php

namespace App\Http\Controllers;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return view('posts', [
            "title"
             => "Posts",
            // "posts" => Post::all()
            "posts" => Post::latest()->get()
        ]);
    }
    public function show(Post $post)
    {
        $blog_post = Post::all();

        return view('post', [
            "title" => "Single Post",
            "post" => $post
        ]);
    }

    public function category(Category $category)
    {
        return view('posts', [
            "title" => $category->name,
            'posts' => $category->posts,
            'category' => $category->name
        ]);
    }

    public function author(User $author)
    {
        return view('posts', [
            "title" => $author->name,
            'posts' => $author->posts,
            'author' => $author->name
        ]);
    }
}
