<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\User;

class ShowController extends Controller
{
     function __invoke(User $user)
    {
        return view("admin.user.show", compact("user"));
    }
}
