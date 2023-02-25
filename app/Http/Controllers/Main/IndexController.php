<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\Post;

class IndexController extends Controller
{
     function __invoke()
    {
        return redirect()->route("post.index");

    }
}
