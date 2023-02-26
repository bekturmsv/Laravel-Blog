<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;

class IndexController extends Controller
{
     function __invoke()
    {
        $posts = Post::paginate(5);
        $randomPosts = Post::get()->random(4);
        $likedPosts = Post::withCount('likedUsers')->orderBy("liked_users_count","DESC")->get()->take(4);
        return view("post.index", compact("posts", "randomPosts", "likedPosts"));
    }
}
