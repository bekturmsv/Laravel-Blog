<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Post\UpdateRequest;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Support\Facades\Storage;

class UpdateController extends BaseController
{
     function __invoke(UpdateRequest $request,Post $post)
    {
        $data = $request->validated();
       $post =  $this->service->update($data, $post);
        $categories = Category::all();
        $tags = Tag::all();
        return view("admin.post.show", compact("post","categories","tags"));
    }
}
