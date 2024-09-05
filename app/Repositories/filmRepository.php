<?php

namespace App\Repositories;

use App\Models\Film;
use App\Interfaces\filmRepositoryInterfaces;
class filmRepository implements filmRepositoryInterfaces
{
    public function index()
    {
        return film::all();
    }
    public function getById($id){
        return Film::findOrFail($id);
     }
    public function store(array $data){
        return Film::create($data);
    }
}
