<?php

namespace App\Http\Controllers\Admin\Tag;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Category\StoreRequest;
use App\Models\Category;

class StoreController extends Controller
{
     function __invoke(StoreRequest $request)
    {
        $data = $request -> validated();
        Category::firstOrCreate($data);
        return redirect()->route("admin.category.index");
    }
}
