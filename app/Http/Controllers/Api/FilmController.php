<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Interfaces\FilmRepositoryInterface;
use App\Http\Resources\FilmResource;
use App\Models\Film;
use App\Classes\ApiResponseClass;
use App\Http\Requests\Api\{
    StoreFilmRequest,
};
use Illuminate\Support\Facades\DB;

class FilmController extends Controller
{   
    private FilmRepositoryInterface $filmRepositoryInterface;

    public function __construct(FilmRepositoryInterface $filmRepositoryInterface)
    {
        $this->filmRepositoryInterface = $filmRepositoryInterface;
    }
    public function index()
    {
        $data = $this->filmRepositoryInterface->index();
        return ApiResponseClass::sendResponse(FilmResource::collection($data), '', 200);
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
    public function store(StoreFilmRequest $request)
    {

        $posterPath = $request->file('poster')->store('images');

        $details = [
            'id' => $request->id,
            'title' => $request->title,
            'sinopsis' => $request->sinopsis,
            'year' => $request->year,
            'poster' => $posterPath,
            'genre_id' => $request->genre_id,
        ];
        DB::beginTransaction();
        try{
             $film = $this->filmRepositoryInterface->store($details);

             DB::commit();
             return ApiResponseClass::sendResponse(new filmResource($film),'Product Create Successful',201);

        }
        catch(\Exception $ex){
            return ApiResponseClass::rollback($ex);
        }
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $film = $this->filmRepositoryInterface->getById($id);

        if (!$film) {
        return ApiResponseClass::sendError('Film not found', 404);
        }
        $film ['kritiks'] = $film->kritik()->get();
        $film ['perans']  = $film->peran()->get();
        return ApiResponseClass::sendResponse(new FilmResource($film), 'Detail data film!', 200);
       

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
