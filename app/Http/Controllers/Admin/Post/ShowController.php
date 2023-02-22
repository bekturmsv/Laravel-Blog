<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;

class ShowController extends BaseController
{
     function __invoke(Post $post)
    {
        $categories = Category::all();
        $tags = Tag::all();
        return view("admin.post.show", compact("post","categories","tags"));
    }
}
