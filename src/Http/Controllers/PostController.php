<?php

namespace ShakibZaman\Post\Http\Controllers;

use App\Http\Controllers\Controller;
use ShakibZaman\Post\Model\Post;

class PostController extends Controller
{
    public function getPosts()
    {
        $posts=Post::all();
        return view("Post::post.index",compact('posts'));
    }
}
