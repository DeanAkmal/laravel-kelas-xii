<?php

namespace App\Http\Controllers;

use App\Models\Film;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $keyword = $request->input('search');
        $film = Film::where('title', 'like', "%".$keyword."%")
        ->orwhere('sinopsis', 'like', "%".$keyword."%")
        ->orWhere('year', 'like', "%".$keyword."%")
        ->first();

        return view('components.searchresults', compact('film'));
    }
}
