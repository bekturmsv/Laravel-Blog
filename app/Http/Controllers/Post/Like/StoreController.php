<?php

namespace App\Http\Controllers\Post\Like;
use App\Http\Controllers\Controller;
use App\Http\Requests\Post\Comment\StoreRequest;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Post;
use App\Models\Tag;
use App\Models\User;

class StoreController extends Controller
{
     function __invoke(Post $post)
    {
        auth()->user()->likedPosts()->toggle($post->id );
        return redirect()->back();
    }
}
