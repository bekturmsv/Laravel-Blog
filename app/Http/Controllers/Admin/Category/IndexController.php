<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use App\Models\Category;

class IndexController extends Controller
{
     function __invoke()
    {
        $categories = Category::all();
        return view("admin.categories.index", compact("categories"));
    }
}
