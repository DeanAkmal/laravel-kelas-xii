<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\StoreFilmRequest;
use Illuminate\Http\Request;
use App\classes\ApiResponseClass;
use App\Interfaces\filmRepositoryInterfaces;
use App\Http\Resources\FilmResorce;
use Illuminate\Support\Facades\DB;
use Response;

class FilmController extends Controller
{
    private filmRepositoryInterfaces $filmRepositoryInterface;

    public function __construct(filmRepositoryInterfaces $filmRepositoryInterface)
    {
        $this->filmRepositoryInterface = $filmRepositoryInterface;
    }
    /**
     * Display a listing of the resource.
     */
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data = $this->filmRepositoryInterface->index();

        return ApiResponseClass::sendResponse(FilmResorce::collection($data),'',200);
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
    public function store(StoreFilmRequest $request)
    {
        $posterPath = $request->file('poster')->store('images');
        $details =[
            'id'        => $request->id,
            'title'     => $request->title,
            'sinopsis'  => $request->sinopsis,
            'year'      => $request->year,
            'poster'    => $posterPath,
            'genre_id'     => $request->genre_id,
        ];
        DB::beginTransaction();
            try{
             $film =$this->filmRepositoryInterface->store($details);
        DB::commit();
        return ApiResponseClass::sendResponse(new FilmResorce($film), "film create succesful", 201);
        }catch(\Exception $ex){
            return ApiResponseClass::rollback($ex);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
       $film = $this->filmRepositoryInterface->getById($id);
       $film['komentar'] = $film->kritik()->get();
       $film['peran'] = $film->peran()->get();

       return ApiResponseClass::sendResponse(new  FilmResorce($film), '', 200);
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
