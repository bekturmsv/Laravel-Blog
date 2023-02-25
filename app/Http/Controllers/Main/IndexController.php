<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\Post;

class IndexController extends Controller
{
     function __invoke()
    {
        $posts = Post::paginate(2);
        $randomPosts = Post::get()->random(4);
        $likedPosts = Post::withCount('likedUsers')->orderBy("liked_users_count","DESC")->get()->take(4);
        return view("main.index", compact("posts", "randomPosts", "likedPosts"));
    }
}
