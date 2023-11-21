<?php

namespace App\Http\Controllers;

use Dentro\Yalr\Attributes\Get;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    #[Get('/','home')]
    function index(): View
    {
        return view('home');
    }
}
