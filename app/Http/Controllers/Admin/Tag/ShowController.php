<?php

namespace App\Http\Controllers\Admin\Tag;

use App\Http\Controllers\Controller;
use App\Models\Category;

class ShowController extends Controller
{
     function __invoke(Category $category)
    {
        return view("admin.categories.show", compact("category"));
    }
}
