<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subgenre extends Model
{
    protected $table = 'subgenres';

    protected $fillable = [
        'name',
        'genre',
        'born',
        'country_of_origin',
        'history',
        'popularity',
        'slug'
    ];

    public $timestamps = false;


    public function key_albums()
    {
        return $this->belongsToMany(Album::class, 'subgenre_key_albums');
    }

    public function originators()
    {
        return $this->belongsToMany(Artist::class, 'subgenre_originators', 'subgenre_id', 'artist_id');
    }

}
