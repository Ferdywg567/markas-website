<?php

namespace App\Http\Controllers;

use Dentro\Yalr\Attributes\Get;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    #[Get('/','home')]
    function index(){

    }
}
