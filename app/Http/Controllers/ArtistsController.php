<?php

namespace App\Http\Controllers;

use App\Artist;
use App\Subgenre;
use Illuminate\Http\Request;

class ArtistsController extends Controller
{
    public function artist(string $artist_slug)
    {
        $artist = Artist::where('slug', $artist_slug)->first();

        $artist->load([
            'subgenre', 'video'
        ]);

//        dd($artist->toArray());

        $subgenres = Subgenre::where('genre', $artist->subgenre->genre)->get();


        return view("artist", [
            'subgenre' => $artist->subgenre,
            'genre_name' => $artist->subgenre->genre,
            'subgenres' => $subgenres,
            'artist' => $artist
        ]);
    }


}
