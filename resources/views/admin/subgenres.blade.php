@extends('layouts.admin')

@section('content')
<div class="container">
    <a href="{{ route('admin.subgenre.add') }}" class="btn btn-lg btn-primary" style="margin-top: 40px; margin-bottom: 15px">Add New +</a>
    <br>
</div>

<div class="container" style="margin-top: 60px">
    <div class="row">
        <div class="col-sm-12">
            <table class="table">
                <tr>
                    <th>Name</th>
                    <th>Genre</th>
                    <th>Born</th>
                    <th>Country</th>
                    <th>Popularity</th>
                    <th></th>
                </tr>

                @foreach($subgenres as $subgenre)
                    <tr>
                        <td>{{ $subgenre->name }}</td>
                        <td>{{ trans('genres.genre_names.'. $subgenre->genre) }}</td>
                        <td>{{ $subgenre->born }}</td>
                        <td>{{ trans('general.countries.' . $subgenre->country_of_origin) }}</td>
                        <td>{{ trans('genres.popularity.' . $subgenre->popularity) }}</td>
                        <td><button class="btn btn-xs"><a href="{{ route('admin.subgenre.edit', ['id' => $subgenre->id]) }}">Edit</a></button></td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>

<div>
    <div class="container">
        {{ $subgenres->links() }}
    </div>
</div>
@endsection
