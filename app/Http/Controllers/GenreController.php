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

        return view("genre.$genre_name", compact('subgenres', 'genre_name'));
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

        return view("subgenre", compact('subgenre', 'subgenres', 'genre_name','artists'));
    }


//    public function index()
//    {
//        @if () - if selected page to pokazyvatu toj page
//        @endif
//    }

//    public function metal()
//    {
//        $subgenres = Subgenre::dropdown();
//        return view('genre.metal', compact('subgenres'));
//    }
//
//    public function electronic()
//    {
//        $subgenres = Subgenre::dropdown();
//        return view('genre.electronic', compact('subgenres'));
//    }
//
//    public function pop()
//    {
//        $subgenres = Subgenre::dropdown();
//        return view('genre.pop', compact('subgenres'));
//    }
//
//    public function hiphop()
//    {
//        $subgenres = Subgenre::dropdown();
//        return view('genre.hip-hop', compact('subgenres'));
//    }
//
//    public function rock()
//    {
//        $subgenres = Subgenre::dropdown();
//        return view('genre.rock', compact('subgenres'));
//    }
//
//    public function other()
//    {
//        $subgenres = Subgenre::dropdown();
//        return view('genre.other', compact('subgenres'));
//    }

}

//    $subgenres = Subgenre::dropdown();
//    return view('genre.rock', compact('subgenres'));
