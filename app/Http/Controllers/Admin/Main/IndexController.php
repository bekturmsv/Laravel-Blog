<?php

namespace App\Http\Controllers\Admin\Main;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
     function __invoke()
    {
        return view("admin.main.index");
    }
}
