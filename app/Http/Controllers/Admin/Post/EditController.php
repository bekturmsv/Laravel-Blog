<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;

class EditController extends Controller
{
     function __invoke(Post $post)
    {
        return view("admin.post.edit", compact("post"));
    }
}
