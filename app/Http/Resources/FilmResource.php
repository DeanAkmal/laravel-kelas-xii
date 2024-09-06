<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class FilmResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return[
            'id'    => $this->id,
            'title' => $this->tittle,
            'sinopsis'  =>$this->sinopsis,
            'year'      => $this->year,
            'poster'    => $this->poster,
            'genre_id'  => $this->genre_id,
            'name_genre'    => $this->genre->name,
            'kritik'        => $this->kritik->pluck('comment'),
            'actor'         => $this->peran->map(function($peran) {
                return [
                    'actor' => $peran->actor,
                    'cast'  => $peran->cast->name,
                ];
            }),
            'created_at'    => $this->created_at,
            'update_at'     => $this->update_at,
        ];
    }
}
