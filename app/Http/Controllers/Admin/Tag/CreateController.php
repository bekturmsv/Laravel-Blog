<?php

namespace App\Http\Controllers\Admin\Tag;

use App\Http\Controllers\Controller;

class CreateController extends Controller
{
     function __invoke()
    {
        return view("admin.tag.create");
    }
}
