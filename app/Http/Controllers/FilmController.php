<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FilmController extends Controller
{
    //SELECT film_id, title, replacement_cost FROM film WHERE replacement_cost BETWEEN 20 AND 30 ORDER BY title;
    function filmsByCost($min, $max)
    {
        return DB::table("film")
                    ->select("film_id","title","replacement_cost")
                    ->whereBetween("replacement_cost", [$min,$max])
                    ->orderBy("title")
                    ->get();
    }

}
