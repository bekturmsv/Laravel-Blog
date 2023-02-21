<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Models\Category;

class CreateController extends Controller
{
     function __invoke()
    {
        $categories = Category::all();
        return view("admin.post.create", compact("categories"));
    }
}
