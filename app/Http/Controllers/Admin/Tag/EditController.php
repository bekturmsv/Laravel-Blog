<?php

namespace App\Http\Controllers\Admin\Tag;

use App\Http\Controllers\Controller;
use App\Models\Category;

class EditController extends Controller
{
     function __invoke(Category $category)
    {
        return view("admin.categories.edit", compact("category"));
    }
}
