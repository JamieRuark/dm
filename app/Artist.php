<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{

    public function subgenre()
    {
        return $this->belongsTo(Subgenre::class);
    }

    public function video()
    {
        return $this->hasMany(Media::class, 'parent_id');
    }



}



//{       klikajesh na ssulky i vono shykaje po nazvi take same imja v bazi danux
//
//        public static function bands($name)
//    {
//        $name = $this->>?name?
//        return static::where('name', $name)->get();
//    }
//}

//        public static function bands($name)
//    {
//        $name = $this->>?name?
//        return static::where('subgenre_id',5)->orderBy('popularity','desc')->get();
//    }
//}

//        public static function bands($name)
//    {
//        $name = $this->>?name?
//        return static::where('subgenre_id',5)->orderBy('popularity','desc')->get();
//    }
//}
