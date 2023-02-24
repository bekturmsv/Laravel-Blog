<?php

namespace App\Http\Controllers\Personal\Comment;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use App\Models\User;

class IndexController extends Controller
{
     function __invoke()
    {

        return view("personal.comment.index");
    }
}
