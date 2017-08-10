<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subgenre extends Model
{
    public function key_albums()
    {
        return $this->belongsToMany(Album::class, 'subgenre_key_albums');
    }

    public function originators()
    {
        return $this->belongsToMany(Artist::class, 'subgenre_originators', 'subgenre_id', 'artist_id');
    }

}
