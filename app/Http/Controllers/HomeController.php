<?php

namespace App\Http\Controllers;

use Dentro\Yalr\Attributes\Get;
use Dentro\Yalr\Attributes\Prefix;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;


class HomeController extends Controller
{
    #[Get('/','home')]
    function index(): View
    {
        return view('home');
    }

	#[Get('/about','about')]
	function about() : View {
		return view('about');
	}
  
	#[Get('/event','event')]
	function event() : View {
		return view('event');
	}
}
