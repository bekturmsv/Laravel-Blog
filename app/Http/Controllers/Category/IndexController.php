<?php

namespace App\Http\Controllers\Category;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;

class IndexController extends Controller
{
     function __invoke()
    {
        $categories = Category::all();
        return view("category.index",compact("categories"));

    }
}
