<?php

namespace App\Http\Controllers;

use App\Models\Cast;
use App\Http\Requests\StoreCastRequest;
use App\Http\Requests\UpdateCastRequest;

class CastController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCastRequest $request)
    {
        $validatedata = $request->validate([
            'name' => 'required|string|max:255',
            'age'   => 'required|integer|min:1',
            'bio'   => 'nullable|string',
        ]);
        $cast = Cast::create($validatedata);
        return response()->json([
            'succes' => true,
            'data'   => $cast,
            'message' => 'cast created successfully'
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Cast $cast)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cast $cast)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCastRequest $request, Cast $cast)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cast $cast)
    {
        //
    }
}
