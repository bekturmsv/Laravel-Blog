<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Models\User;

class EditController extends Controller
{
     function __invoke(User $user)
    {
        $roles = User::getRoles();
        return view("admin.user.edit", compact("user", "roles"));
    }
}
