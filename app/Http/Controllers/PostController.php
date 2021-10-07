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
            // "posts" => Post::all()
            "posts" => Post::with(['author', 'category'])->latest()->get() //terakhir dimasukkan akan berada di atas
        ]);
    }

    public function show(Post $post) //menggunakan route model binding
    {
        return view('post', [
            "title" => "Single Post",
            "post" => $post
        ]);
    }
}
