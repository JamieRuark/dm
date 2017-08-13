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
        //todo
    }

    public function store(StoreSubgenre $request)
    {
        $data = $request->all();

        $data['slug'] = str_slug($data['name']);

        $item = Subgenre::create($data);

        $item->addMediaFromRequest('cover')->toMediaCollection('images');

        dd($item);
    }
}
