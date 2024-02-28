<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    public function search(Request $request)
    {
        $countryName = $request->input('country_name');

        $country = DB::table('orszagok_tabla')
            ->where('nev', $countryName)
            ->first();

        return view('index', compact('country'));
    }
}
