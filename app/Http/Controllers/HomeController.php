<?php

namespace App\Http\Controllers;

use App\Models\Event;
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
        $events = Event::all();
		return view('event', compact('events'));
	}

    #[Get('/check-date','check-date')]
    function checkRoomDate(){
        return view('check-date');
    }
}
