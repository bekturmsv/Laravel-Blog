<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Models\User;

class CreateController extends Controller
{
     function __invoke()
    {
        $roles = User::getRoles();
        return view("admin.user.create", compact("roles"));
    }
}
