<?php

namespace App\Http\Controllers\Personal\Comment;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Post;
use App\Models\Tag;
use App\Models\User;

class EditController extends Controller
{
    public function __invoke(Comment $comment)
    {
        return view("personal.comment.edit",compact("comment"));
    }
}
