<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ActorController extends Controller
{
    function actors()
    {
        $actors = DB::table('actor')->get();
        return $actors;
    }

    function actorsByFirstname($firstname)
    {
//         SELECT * FROM actor
//         WHERE first_name = "Penelope";
        $actors = DB::table('actor')
                    ->where('first_name', '=', $firstname)
                    ->get();
        return $actors;

    }

    function actorsByName($firstname, $lastname)
    {
        $actors = DB::table('actor')
                    ->where('first_name', '=', $firstname)
                    ->where('last_name', $lastname)
                    ->get();
        return $actors;
    }

    // SELECT COUNT(*) AS countActors FROM actor
    function actorsCount()
    {
        // return DB::table('actor')->count();
        return DB::raw('SELECT COUNT(*) AS countActors FROM actor');
    }

    // SELECT COUNT(*) FROM actor WHERE first_name = 'Penelope';
    function actorsCountByFirstname($firstname)
    {
        return DB::table('actor')
                ->where('first_name', $firstname)
                ->count();
    }

    // SELECT first_name, COUNT(*) AS countActors FROM actor GROUP BY first_name ORDER BY countActors;

    function actorsCountbyName()
    {
        return DB::table('actor')
                ->select('first_name', DB::raw('COUNT(*) AS countActors'))
                ->groupBy('first_name')
                // ->orderBy('countActors', 'desc')
                ->orderByDesc('countActors')
                ->get();
    }
}
