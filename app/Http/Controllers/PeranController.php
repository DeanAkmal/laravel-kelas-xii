<?php

namespace App\Http\Controllers;

use App\Models\Peran;
use App\Models\Cast;
use App\Models\Film;
use Illuminate\Http\Request;

class PeranController extends Controller
{
    public function index($filmId)
    {
        $perans = Peran::where('film_id', $filmId)->get();
        return view('peran.index', compact('perans', 'filmId'));
    }

    public function create($filmId)
    {
        $casts = Cast::all();
        return view('peran.create', compact('casts', 'filmId'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'film_id' => 'required|exists:films,id',
            'cast_id' => 'required|exists:casts,id',
            'actor' => 'required|string|max:255',
        ]);

        Peran::create($request->all());
        return redirect()->route('peran.index', ['filmId' => $request->film_id]);
    }

    public function edit(Peran $peran)
    {
        $casts = Cast::all();
        $films = Film::all();
        return view('peran.edit', compact('peran', 'casts', 'films'));
    }


    public function update(Request $request, Peran $peran)
    {
        $request->validate([
            'cast_id' => 'required|exists:casts,id',
            'actor' => 'required|string|max:255',
        ]);

        $peran->update($request->all());
        return redirect()->route('peran.index', ['filmId' => $peran->film_id]);
    }

    public function destroy(Peran $peran)
    {
    
    }
}
