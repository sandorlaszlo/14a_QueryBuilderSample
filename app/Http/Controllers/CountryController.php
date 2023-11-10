<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CountryController extends Controller
{
    //SELECT country_id, country FROM country
    //WHERE country IN ('Hungary', 'Slovakia', 'Poland', 'Czech Republic');
    function countriesInV4()
    {
        $countries = array('Hungary', 'Slovakia', 'Poland', 'Czech Republic');
        return DB::table("country")
                ->select("country_id", 'country')
                ->whereIn("country", $countries)
                ->get();
    }
}