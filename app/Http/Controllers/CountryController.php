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
    public function filter(Request $request)
    {
        $selectedRegions = $request->only(['europa', 'azsia', 'afrika', 'amerika', 'ausztralia', 'oceania']);

        $countries = Country::whereIn('foldres', array_keys(array_filter($selectedRegions)))->get();

        return view('index', compact('countries'));
    }
}


