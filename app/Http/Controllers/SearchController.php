<?php

namespace App\Http\Controllers;

use App\Models\Film;
use Illuminate\Http\Request;

class SearchController extends Controller
{
public function search(Request $request)
{
    $keyword = $request->input('search');

    $filmByTitle = Film::where('title', 'like', "%{$keyword}%")->first();

    $filmsByOtherCriteria = Film::where(function($query) use ($keyword) {
        $query->where('sinopsis', 'like', "%{$keyword}%")
              ->orWhere('year', 'like', "%{$keyword}%");
    })->distinct()->paginate(6);

    return view('components.searchresults', [
        'filmByTitle' => $filmByTitle,
        'filmsByOtherCriteria' => $filmsByOtherCriteria,
        'keyword' => $keyword
    ]);
}

}
