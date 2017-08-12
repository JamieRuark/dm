<?php

namespace App\Http\Controllers;

use App\Artist;
use App\Subgenre_key_album;
use Illuminate\Http\Request;
use App\Subgenre;

class GenreController extends Controller
{

    public function genre(string $genre_name)
    {
        $subgenres = Subgenre::where('genre', $genre_name)->get();

        return view("layouts.main.genre.$genre_name", compact('subgenres', 'genre_name'));
    }

    public function subgenre(string $genre_name, string $subgenre_slug)
    {
        $subgenre = Subgenre::where('slug',$subgenre_slug)->first();

        $subgenre->load(['key_albums', 'originators']);

//        foreach ($subgenre->originators as $a) {
//            dd($a);
//        }

        $subgenres = Subgenre::where('genre', $subgenre->genre)->get();

        $artists = Artist::where('subgenre_id', $subgenre->id)->get();

        return view("layouts.main.subgenre", compact('subgenre', 'subgenres', 'genre_name','artists'));
    }
}
