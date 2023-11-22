<?php

namespace App\Http\Controllers;

use Dentro\Yalr\Attributes\Get;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class EventController extends Controller
{
    #[Get('/event','event')]
    function index(): View
    {
        return view('event');
    }

}
