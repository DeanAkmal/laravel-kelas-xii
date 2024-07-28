<?php

namespace App\Http\Controllers;

use App\Models\Film;
use App\Models\Cast;
use App\Models\Peran;
use Illuminate\Http\Request;
use App\Http\Requests\StorePeranRequest;
use App\Http\Requests\UpdatePeranRequest;
use App\Http\Controllers\Controller;

class PeranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       
    }
    
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $casts  = Cast::all();
        $perans = Peran::all();
        $films =  Film::all();
        return view('perans.create', compact('perans', 'casts', 'films'));
        //
    }

    /**
     * Store a newly created resource in storage.
     */ 
    public function store(StorePeranRequest $request)
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

    /**
     * Display the specified resource.
     */
    public function show(Peran $peran)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Peran $peran)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePeranRequest $request, Peran $peran)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Peran $peran)
    {
        //
    }
}
