<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;

class CreateController extends Controller
{
     function __invoke()
    {
        return view("admin.categories.create");
    }
}
