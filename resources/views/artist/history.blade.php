@extends('layouts.main')

@section('content')
    <div class="container-fluid" id="red">
        <div class="row">
            <div class="col-xs-5 bg-warning col-xs-offset-1 square">
                <img src="/storage/images/groovemetal1.jpg">
            </div>
            <div class="col-xs-5 bg-danger square">
                <ul class="list-group" id="red_ul">
                    <li class="list-group-item red-style"><span class="red-list" id="red_active_founded">Founded : </span><span class="red-list" id="red_active_year">1981</span><span class="red-list" id="red_disbanded_existed">Existed </span> : <span class="red-disbanded" id="red_disbanded_start">1981</span> - <span class="red-disbanded" id="red_disbanded_finish">2003</span></li>
                    <li class="list-group-item red-style"><span class="red-list">Country</span> : <span id="red_country">{{$artist->country}}</span></li>
                    <li class="list-group-item red-style"><span class="red-list">Genre</span> : <span id="red_genre"></span></li>
                    <li class="list-group-item red-style"><span class="red-list">Label</span> : <span id="red_label">{{$artist->label}}</span></li>
                    <li class="list-group-item red-style"><span class="red-list">Popularity</span> : <span id="red_popularity">{{$artist->popularity}}</span></li>
                </ul>
            </div>
        </div>
    </div>


    <div class="container" style="margin-top:3px" id="myTabs">
        <div id="menu">
            <ul class="nav nav-pills list-inline">
                <li><a href="/artists/{{$artist->slug}}/news" >News</a></li>
                <li><a href="/artists/{{$artist->slug}}/music-videos" >Music/Videos</a></li>
                <li class="active"><a href="/artists/{{$artist->slug}}/history" >History</a></li>
                <li><a href="/artists/{{$artist->slug}}/albums" >Discography</a></li>
                <li><a href="/artists/{{$artist->slug}}/members" >Members</a></li>
            </ul>
        </div>

        <!--         ! ! !   C O N T E N T   ! ! !-->
        <div class="content-history" id="content_history">
            <p>{{$artist->history}}</p>
        </div>

@endsection
