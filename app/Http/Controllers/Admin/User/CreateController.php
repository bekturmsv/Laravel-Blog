<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;

class CreateController extends Controller
{
     function __invoke()
    {
        return view("admin.user.create");
    }
}
