<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class MovieController extends Controller
{
    public function topRated()
    {
        $fifty_top_movies = DB::select(
            "
            SELECT *
            FROM `movies`
            ORDER BY `rating` DESC
            LIMIT 50;
            ",[
                
            ]
        );
        // dd($top_movies);

        return view('movies.top-rated',compact(
            'fifty_top_movies'
        )
        );
    }


    public function shawshank()
    {
        return view('movies.detail');
    }

    public function search()
    {
        $search_term = $_GET['search'] ?? null;
        $results = [];

        if ($search_term) {
            $results = DB::select("
                SELECT *
                FROM `movies`
                WHERE `name` LIKE ?
                ORDER BY `name` ASC
            ", [
                '%' . $search_term . '%'
            ]);
        }

        // dump($search_term);

        return view('movies.search', [
            'search_term' => $search_term,
            'results' => $results
        ]);
        
    }
}




