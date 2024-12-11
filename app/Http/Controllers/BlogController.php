<?php

namespace App\Http\Controllers;

use App\Models\Blog\Post;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Post::with(['author','category','tags'])->paginate();
        return view('frontend.blogIndex', [
            'blogs' => $blogs
        ]);
    }

    public function show(int $blogId)
    {

        $blog = Post::find($blogId);
        return view('frontend.blogShow', [
            'blog' => $blog
        ]);
    }
}
