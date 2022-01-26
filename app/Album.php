<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    
    // public $timestamps = false;

    protected $fillable = [

        'album_name',
        'album_type',
        'publication',
        'duration',
        'genre',
        'producer',
        'registration'

    ];

}
