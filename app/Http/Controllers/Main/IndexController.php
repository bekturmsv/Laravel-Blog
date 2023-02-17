<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class IndexController extends Controller
{
     function __invoke()
    {
        return view("main.index");
    }
}
