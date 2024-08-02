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

    public function create()
    {
        $casts  = Cast::all();
        $perans = Peran::all();
        $films =  Film::all();
        return view('peran.create', compact('perans', 'casts', 'films'));
    }

    public function store(Request $request)
    {
        $peran = new Peran([
            'actor' => $request['peran'],
            'cast_id' => $request['cast_id'],
            'film_id' => $request['film_id']
        ]);

        $peran->save();

        // Redirect to a relevant page with a success message
        return redirect()->route('movies.show', ['film'=> $peran->film_id])->with('success', 'Peran created successfully.');
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
    $filmId = $peran->film_id;
        $peran->delete();
        return redirect()->route('peran.index', ['filmId' => $filmId])->with('success', 'Peran berhasil dihapus.');
    }
}
