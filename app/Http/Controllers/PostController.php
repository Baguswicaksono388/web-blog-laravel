<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        return view('blog', [
            "title" => "All Post",
            "active" => "posts",
            // "posts" => Post::all()
            "posts" => Post::latest()->get() //terakhir dimasukkan akan berada di atas
        ]);
    }

    public function show(Post $post) //menggunakan route model binding
    {
        return view('post', [
            "title" => "Single Post",
            "active" => "posts",
            "post" => $post
        ]);
    }
}
