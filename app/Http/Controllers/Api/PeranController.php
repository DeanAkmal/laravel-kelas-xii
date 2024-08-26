<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Interfaces\PeranRepositoryInterface;
use App\Classes\ApiResponseClass;
use App\Http\Resources\PeranResource;

class PeranController extends Controller
{
    private PeranRepositoryInterface $peranRepositoryInterface;

    public function __construct(PeranRepositoryInterface $peranRepositoryInterface)
    {
        $this->peranRepositoryInterface = $peranRepositoryInterface;
    }
    

    public function index()
    {
        $data = $this->peranRepositoryInterface->index();
        return ApiResponseClass::sendResponse(PeranResource::collection($data), '', 200);
    
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
