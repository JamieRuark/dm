<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\StoreSubgenre;
use App\Subgenre;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SubgenresController extends Controller
{
    public function index()
    {
        $subgenres = Subgenre::orderBy('id', 'DESC')->paginate(10);

        return view('admin.subgenres', compact('subgenres'));
    }

    public function add()
    {
        return view('admin.subgenres.add-info');
    }

    public function edit(int $id)
    {
        $subgenre = Subgenre::findOrFail($id);

        return view('admin.subgenres.update-info', compact('subgenre'));
    }

    public function store(StoreSubgenre $request)
    {
        $data = $request->all();

        $data['slug'] = str_slug($data['name']);

        $item = Subgenre::create($data);

        if (array_get($data, 'cover')) {
            $item->addMediaFromRequest('cover')->toMediaCollection('images');
        }



        dd($item);
    }

    public function update($id, StoreSubgenre $request)
    {
        /** @var Subgenre $item */
        $item = Subgenre::findOrFail($id);

        $data = $request->all();

        $updated = $item->update($data);



        if (array_get($data, 'cover')) {
//            if ($item->hasMedia('images')) {
//                $item->deleteMedia()
//            }
//            $item->addMediaFromRequest('cover')->toMediaCollection('images');

//            $item->updateMedia([$data['cover']], 'images');

            //todo update media
        }

        dd('update', $item);
    }
}
