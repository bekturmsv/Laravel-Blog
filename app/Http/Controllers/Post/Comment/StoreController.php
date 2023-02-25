<?php

namespace App\Http\Controllers\Post\Comment;
use App\Http\Controllers\Controller;
use App\Http\Requests\Post\Comment\StoreRequest;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Post;
use App\Models\Tag;
use App\Models\User;

class StoreController extends Controller
{
     function __invoke(Post $post, StoreRequest $request)
    {
        $data = $request->validated();
        $data["user_id"] = auth()->user()->id;
        $data["post_id"] = $post->id;
        Comment::create($data);
        return redirect()->route("post.show", $post->id);
    }
}
