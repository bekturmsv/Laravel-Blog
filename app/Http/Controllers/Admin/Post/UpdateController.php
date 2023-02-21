<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Post\UpdateRequest;
use App\Models\Category;
use App\Models\Post;

class UpdateController extends Controller
{
     function __invoke(UpdateRequest $request,Post $post)
    {
        $data = $request->validated();
        $post->update($data);
        return view("admin.post.show", compact("post"));
    }
}
