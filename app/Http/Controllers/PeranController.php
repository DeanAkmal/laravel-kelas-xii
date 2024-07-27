<?php

namespace App\Http\Controllers;

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
       
        return view('perans.index');
    }
    
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $perans = Peran::all();
        return view('perans.create', compact('perans'));
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePeranRequest $request)
    {
        //
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
