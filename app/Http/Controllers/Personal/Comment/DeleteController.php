<?php

namespace App\Http\Controllers\Personal\Comment;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Post;
use App\Models\Tag;
use App\Models\User;

class DeleteController extends Controller
{
     function __invoke(Comment $comment )
    {
        $comment->delete();
        return redirect()->route("personal.comment.index");
    }
}
