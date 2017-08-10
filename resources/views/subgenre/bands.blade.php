@extends('layouts.main')

@section('content')
    <div class="container-fluid" id="red2">
        <div class="row">
            <div class="col-xs-5 bg-warning col-xs-offset-1 square2">
                <img src="/storage/images/gmgm.jpg">
            </div>
            <div class="col-xs-5 bg-danger square2">
                <ul class="list-group" id="red_ul">
                    <li class="list-group-item red-style"><span class="red-list" id="red_active_founded">Founded : </span><span class="red-list" id="red_active_year">1981</span><span class="red-list" id="red_disbanded_existed">Year Of Birth </span> : <span class="red-disbanded" id="red_disbanded_start">1990</span>  <span class="red-disbanded" id="red_disbanded_finish"></span></li>
                    <li class="list-group-item red-style"><span class="red-list">Country Of Origin</span> : <span id="red_country">USA</span></li>
                    <li class="list-group-item red-style"><span class="red-list">Originators</span> : <span id="red_genre">Pantera, Exhorder</span></li>
                    <li class="list-group-item red-style"><span class="red-list">Predecessors</span> : <span id="red_label">Metallica, Slayer, White Zombie</span></li>
                    <li class="list-group-item red-style"><span class="red-list">Popularity</span> : <span id="red_popularity">Very Popular</span></li>
                </ul>
            </div>
        </div>
    </div>


    <div class="container" style="margin-top:3px" id="myTabs">
        <div id="menu">
            <ul class="nav nav-pills list-inline">
                <li><a href="#content_news" data-toggle="tab">Latest</a></li>
                <li><a href="#content_music_videos" data-toggle="tab">History</a></li>
                <li class="active"><a href="#content_history" data-toggle="tab">Bands</a></li>
                <li><a href="#content_discography" data-toggle="tab">Key Albums</a></li>
                <li><a href="#content_members" >Local Scenes</a></li>
            </ul>
        </div>

        <!--         ! ! !   C O N T E N T   ! ! !-->
        <div class="table-responsive">
            <table class="table table-hover table-bordered" id="table2">

                {{--@foreach ($bands as $artist)--}}
                    {{--<tr><td><a href="{{url('/bands/' . $artist->slug)}}"><strong>{{$artist}}</strong></a></td><td>2005</td><td>USA</td><td>Prospect Park</td></tr>--}}
                {{--@endforeach--}}

                <tr><td><a href="/band/history" ><strong>PANTERA</strong></a></td><td>1981</td><td>USA</td><td>EastWest</td></tr>

                <tr><td><strong>FIVE FINGERS DEATH PUNCH</strong></td><td>2005</td><td>USA</td><td>Prospect Park</td></tr>

                <tr><td><strong>SEPULTURA</strong></td><td>1984</td><td>Brazil</td><td>Nuclear Blast</td></tr>

                <tr><td><strong>MACHINE HEAD</strong></td><td>1991</td><td>USA</td><td>Nuclear Blast</td></tr>

                <tr><td><strong>HELLYEAH</strong></td><td>2006</td><td>USA</td><td>Eleven Seven</td></tr>

                <tr><td><strong>SOULFLY</strong></td><td>1997</td><td>Brazil</td><td>Nuclear Blast</td></tr>

                <tr><td><strong>DEVILDRIVER</strong></td><td>2002</td><td>USA</td><td>Napalm Records</td></tr>

                <tr><td><strong>GOJIRA</strong></td><td>1996</td><td>France</td><td>Roadrunner Records</td></tr>

                <tr><td><strong>CAVALERA CONSPIRACY</strong></td><td>2007</td><td>Brazil</td><td>Napalm Records</td></tr>





            </table>
        </div>
    </div>


@endsection