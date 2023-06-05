<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

// use DB;

class IndexController extends Controller
{

    public function index()
    {
        $top_movies = DB::select(
            "
            SELECT *
            FROM `movies`
            WHERE `votes_nr` >= ?
                AND `movie_type_id` = ?
            ORDER BY `rating` DESC
            LIMIT 10;
            ",[
                5000,1
            ]
        );
        // dd($top_movies);

        //resources/views/index/index.blade.php
        // index/index
        // index.index
        return view('index.index',compact(
            'top_movies'
        ));
    }
}
