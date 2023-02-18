<?php

namespace App\Http\Controllers\Admin\Tag;

use App\Http\Controllers\Controller;
use App\Models\Tag;

class IndexController extends Controller
{
     function __invoke()
    {
        $tags = Tag::all();
        return view("admin.tag.index", compact("tags"));
    }
}
