<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    
    protected $fillable = [
        'song_name',
        'artist',
        'duration',
        'publication',
        'producer',
        'genre'
    ];

}
