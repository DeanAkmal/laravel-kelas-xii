<?php

namespace App\Repositories;

use App\Interfaces\PeranRepositoryInterface;
use App\Models\Peran;

class PeranRepository implements PeranRepositoryInterface
{
   public function index(){
      return Peran::all();
  }

  public function getById($id){
     return Peran::findOrFail($id);
  }

  public function store(array $data){
     return Peran::create($data);
  }

  public function update(array $data,$id){
     return Peran::whereId($id)->update($data);
  }
  
  public function delete($id){
   Peran::destroy($id);
  }
}