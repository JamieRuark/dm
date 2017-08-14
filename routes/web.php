<?php

Auth::routes();

Route::get('/', function () {
    return view('layouts.main.home');
});

/*
|--------------------------------------------------------------------------
| PUBLIC PAGES
|--------------------------------------------------------------------------
*/

Route::get('/genre/{name}', 'GenreController@genre');
Route::get('/genre/{name}/{subgenre}', 'GenreController@subgenre');
Route::get('/artists/{name}', 'ArtistsController@artist');

Route::get('/albums/{name}', 'AlbumsController@album');

/*
|--------------------------------------------------------------------------
| ADMIN
|--------------------------------------------------------------------------
*/
Route::group([
    'middleware' => ['auth', 'admin']
], function() {
    Route::get('/admin', function () {
        return view('admin.main');
    });

    Route::get('/admin/users', 'Admin\UsersController@index');

    Route::get('/admin/subgenres', 'Admin\SubgenresController@index');

    Route::get('/admin/subgenres/{id}', [
        'uses' => 'Admin\SubgenresController@edit',
        'as' => 'admin.subgenre.edit'
    ]);

    Route::get('/admin/subgenres/add', [
        'uses' => 'Admin\SubgenresController@add',
        'as' => 'admin.subgenre.add'
    ]);



    Route::post('/admin/subgenres', [
        'uses' => 'Admin\SubgenresController@store',
        'as' => 'admin.subgenre.store'
    ]);

    Route::post('/admin/subgenres/update/{id}', [
        'uses' => 'Admin\SubgenresController@update',
        'as' => 'admin.subgenre.update'
    ]);

    Route::get('/admin/artists', function () {
        return view('admin.artists');
    });

    Route::get('/admin/albums', function () {
        return view('admin.albums');
    });


// ADMIN(ADD BAND)

    Route::get('/admin/add/band/info', function() {
        return view('admin.add.band-info');
    });

    Route::get('/admin/add/band/albums', function() {
        return view('admin.add.band-albums');
    });

    Route::get('/admin/add/band/members', function() {
        return view('admin.add.band-members');
    });

// ADMIN(ADD SOLO ARTIST)

    Route::get('/admin/add/soloartist/info', function() {
        return view('admin.add.soloartist-info');
    });

    Route::get('/admin/add/soloartist/albums', function() {
        return view('admin.add.soloartist-albums');
    });

// ADMIN (ADD GENRE)

    Route::get('/admin/add/genre/info', function() {
        return view('admin.add.genre-info');
    });

    Route::get('/admin/add/genre/key-albums', function() {
        return view('admin.add.genre-key-albums');
    });

// ADMIN (ADD ALBUM)

    Route::get('/admin/add/album', function() {
        return view('admin.add.album');
    });
});

/*
|--------------------------------------------------------------------------
| AUTHENTICATED USER
|--------------------------------------------------------------------------
*/

Route::group([
    'middleware' => 'auth'
], function() {
    Route::get('/user/favorites', function() {
        return view('user.favorites');
    });

    Route::post('/favorites/add', 'FavoritesController@add');
});
