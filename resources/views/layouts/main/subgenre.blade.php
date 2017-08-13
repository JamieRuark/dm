@extends('layouts.main')

@section('content')
    <div class="container-fluid" id="red2">
        <div class="row">
            <div class="col-xs-5 bg-warning col-xs-offset-1 square2">
                @if($cover)
                    <img src="{{ $cover->getUrl('thumb') }}">
                @else
                    <img src="http://lorempixel.com/400/250/people">
                @endif

            </div>
            <div class="col-xs-5 bg-danger square2">
                <ul class="list-group" id="red_ul">
                    <li class="list-group-item red-style" style="display: inline-block"><span class="red-list">Year Of Birth </span> : <span class="red-disbanded" id="red_disbanded_start">{{$subgenre->born}}</span>  <span class="red-disbanded" id="red_disbanded_finish"></span></li>

                    <div id="fav">
                        <button v-on:click="addToFavorites({{ $subgenre->id }}, 'genre')" class="btn btn-md">Add To Favorites</button>
                        @{{ message }}
                    </div>

                    <span class="glyphicon glyphicon-heart"></span>
                    <li class="list-group-item red-style"><span class="red-list">Country Of Origin</span> : <span id="red_country">{{$subgenre->country_of_origin}}</span></li>
                    {{--@foreach ($subgenre->originators as $originator)--}}
                    {{--<li class="list-group-item red-style"><span class="red-list">Originators</span> : {{ $originator->artist_id }}</li>--}}
                    {{--@endforeach--}}
                    <li class="list-group-item red-style"><span class="red-list">Predecessors</span> : <span id="red_label">Metallica, Slayer, White Zombie</span></li>
                    <li class="list-group-item red-style"><span class="red-list">Popularity</span> : <span id="red_popularity">{{$subgenre->popularity}}</span></li>
                </ul>
            </div>
        </div>
    </div>


    <div class="container" style="margin-top:3px" id="myTabs">
        <ul class="nav nav-tabs" role="tablist">
            <li role="presentation"><a href="#history" data-toggle="tab">History</a></li>
            <li role="presentation" class="active"><a href="#bands" data-toggle="tab">Bands</a></li>
            <li role="presentation"><a href="#key_albums" data-toggle="tab">Key Albums</a></li>
        </ul>

        <div class="tab-content">
            <div role="tabpanel" class="tab-pane active" id="bands">
                <div class="table-responsive">
                    <table class="table table-hover table-bordered" id="table2">
                        @foreach ($artists as $artist)
                            <tr><td><a href="/artists/{{ $artist->slug }}" ><strong>{{$artist->name}}</strong></a></td><td>{{$artist->formed}}</td><td>{{$artist->country}}</td><td>{{$artist->label}}</td></tr>
                        @endforeach
                    </table>
                </div>
            </div>
            <div role="tabpanel" class="tab-pane" id="history">
                <div class="content-history" id="content_history">
                    <p>{{$subgenre->history}}</p>
                </div>
            </div>
            <div role="tabpanel" class="tab-pane" id="key_albums">
                <div class="container">
                    <div class="row">
                        @foreach($subgenre->key_albums as $album)
                        <div class="col-sm-6">
                            <div class="key_albums_left">
                                <div class="kl">
                                    <p>{{ $album->name }}</p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>



        <!--         ! ! !   C O N T E N T   ! ! !-->



@endsection
