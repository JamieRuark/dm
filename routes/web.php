<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Artist;
use App\Subgenre;

Route::get('/', function () {
    return view('welcome');
});

//

Route::get('/genre/{name}', 'GenreController@genre');
Route::get('/genre/{name}/{subgenre}', 'GenreController@subgenre');
Route::get('/artists/{name}', 'ArtistsController@artist');

//

Route::get('/albums/{name}', 'AlbumsController@album');

//

//
//
// ADMIN

Route::get('/admin', function () {
    return view('admin.main');
});

Route::get('/admin/users', function () {
    return view('admin.users');
});

Route::get('/admin/subgenres', function () {
    return view('admin.subgenres');
});

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

//
// USER
//

Route::get('/user/favorites', function() {
    return view('user.favorites');
});













Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/welcome', function () {
    return view('welcome');
});