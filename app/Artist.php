<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{

    // public $timestamps = false;

    protected $fillable = [

        'name',
        'surname',
        'nationality',
        'age',
        'published_albums',
        'musical_genre'
    ]; 
}
