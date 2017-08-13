<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFavorite;
use App\Subgenre;
use Illuminate\Http\Request;

class FavoritesController extends Controller
{
    public function add(StoreFavorite $request)
    {
        $data = $request->all();

        $item = Subgenre::findOrFail($data['id']);

        $response = [];

        if ($data['type'] === 'genre') {

            if($item->favorite()->count()) {
                $item->favorite()->delete();
                $response['action'] = 'removed';
            } else {
                $item->favorite()->create([]);
                $response['action'] = 'added';
            }
        }

        return response()->json($response);
    }
}
