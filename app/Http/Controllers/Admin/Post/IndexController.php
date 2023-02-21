<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;

class IndexController extends Controller
{
     function __invoke()
    {
        $post = Post::all();
        return view("admin.post.index", compact("post"));
    }
}
