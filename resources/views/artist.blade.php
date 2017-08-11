@extends('layouts.main')

@section('content')
    <div class="container-fluid" id="red">
        <div class="row">
            <div class="col-xs-5 bg-warning col-xs-offset-1 square">
                <img src="/storage/images/groovemetal1.jpg">
            </div>
            <div class="col-xs-5 bg-danger square">
                <ul class="list-group" id="red_ul">
                    <li class="list-group-item red-style" style="display: inline-block"><span class="red-list" id="red_active_founded">Founded : </span><span class="red-list" id="red_active_year">1981</span><span class="red-list" id="red_disbanded_existed">Existed </span> : <span class="red-disbanded" id="red_disbanded_start">1981</span> - <span class="red-disbanded" id="red_disbanded_finish">2003</span></li> <button class="btn btn-md">Add To Favorites</button><span class="glyphicon glyphicon-heart"></span>
                    <li class="list-group-item red-style"><span class="red-list">Country</span> : <span id="red_country">{{$artist->country}}</span></li>
                    <li class="list-group-item red-style"><span class="red-list">Genre</span> : <span id="red_genre">{{ $artist->subgenre->name }}</span></li>
                    <li class="list-group-item red-style"><span class="red-list">Label</span> : <span id="red_label">{{$artist->label}}</span></li>
                    <li class="list-group-item red-style"><span class="red-list">Popularity</span> : <span id="red_popularity">{{$artist->popularity}}</span></li>
                </ul>
            </div>
        </div>
    </div>


    <div class="container" style="margin-top:3px" id="myTabs">
        <ul class="nav nav-tabs" role="tablist">
            <li role="presentation"><a href="#news" data-toggle="tab">News</a></li>
            <li role="presentation"><a href="#music_videos" data-toggle="tab">Music/Videos</a></li>
            <li role="presentation" class="active"><a href="#history" data-toggle="tab">History</a></li>
            <li role="presentation"><a href="#discography" data-toggle="tab">Discography</a></li>
            <li role="presentation"><a href="#members" data-toggle="tab">Members</a></li>
        </ul>

        <div class="tab-content">
            <div role="tabpanel" class="tab-pane active" id="history">
                <div class="content-history" id="content_history">
                    <p>{{$artist->history}}</p>
                </div>
            </div>
            <div role="tabpanel" class="tab-pane" id="news">...</div>
            <div role="tabpanel" class="tab-pane" id="music_videos">
                <div class="container">
                    <div class="row">

                            @foreach($artist->video as $video)
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-6">
                                        <p><iframe width="560" height="315" src="https://www.youtube.com/embed/{{ $video->media_id }}" frameborder="0" allowfullscreen></iframe></p>
                                    </div>
                                    <div class="col-md-6">
                                        123
                                    </div>
                                </div>
                            </div>
                            @endforeach

                    </div>
                </div>
            </div>
            <div role="tabpanel" class="tab-pane" id="discography">
                <div class="content-discography" id="content_discography">
                    <ul class="list-group">
                        <li class="list-group-item"><span class="dhlight">1998</span> - Steelbath Suicide</li>
                        <li class="list-group-item"><span class="dhlight">2000</span> - The Chainheart Machine</li>
                        <li class="list-group-item"><span class="dhlight">2001</span> - A Predator's Portrait</li>
                        <li class="list-group-item"><span class="dhlight">2002</span> - Natural Born Chaos</li>
                        <li class="list-group-item"><span class="dhlight">2003</span> - Figure Number Five</li>
                        <li class="list-group-item"><span class="dhlight">2005</span> - Stabbing The Drama</li>
                        <li class="list-group-item"><span class="dhlight">2007</span> - Sworn To A Gret Divide</li>
                        <li class="list-group-item"><span class="dhlight">2010</span> - The Panic Broadcast</li>
                        <li class="list-group-item"><span class="dhlight">2013</span> - The Living Infinite</li>
                        <li class="list-group-item"><span class="dhlight">2015</span> - The Ride Majestic</li>
                    </ul>
                </div>

            </div>
            <div role="tabpanel" class="tab-pane" id="members">
                <div class="content-members" id="content_members">
                    <ul class="list-group">
                        <li class="list-group-item">Bjorn "Speed" Strid - <span class="dhlight">vocals</span></li>
                        <li class="list-group-item">David Andersson - <span class="dhlight">guitars</span></li>
                        <li class="list-group-item">Sylvain Coudret - <span class="dhlight">guitars</span></li>
                        <li class="list-group-item">Sven Karlsson - <span class="dhlight">keyboards</span></li>
                        <li class="list-group-item">Markus Wibom - <span class="dhlight">bass</span></li>
                        <li class="list-group-item">Bastian Thusgaard - <span class="dhlight">drums</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>




        <!--         ! ! !   C O N T E N T   ! ! !-->
        {{--<div class="content-history" id="content_history">--}}
            {{--<p>{{$artist->history}}</p>--}}
        {{--</div>--}}


    {{--<script>--}}
    {{--$('#myTabs a').click(function (e) {--}}
    {{--e.preventDefault()--}}
    {{--$(this).tab('show')--}}
    {{--})--}}
    {{--</script>--}}

@endsection
