<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class VideogameController extends Controller
{
    public function topRated()
    {


        
        return view('games.top-rated');
    }
}
