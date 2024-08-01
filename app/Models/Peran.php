<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peran extends Model
{
    use HasFactory;

    protected $fillable = [
        'film_id', 'cast_id', 'actor'
    ];

    public function film()
    {
        return $this->belongsTo(Film::class);
    }

    public function cast()
    {
        return $this->belongsTo(Cast::class);
    }
}
