<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\User;

class IndexController extends Controller
{
     function __invoke()
    {
        $users = User::all();
        return view("admin.user.index", compact("users"));
    }
}
