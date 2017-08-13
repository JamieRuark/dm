<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MusInfo</title>
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Arvo" rel="stylesheet">
    <link href="/main.css" rel="stylesheet">
    <style>
        #hh {
            /*                background-color: antiquewhite;*/
        }

        #table2:hover {
            cursor: pointer;
        }

    </style>

</head>
<body>

<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">

        <!--             !!! N A V B A R   H E A D E R !!! (logo & collapsable menu)  -->
        <div class="navbar-header">
            <!--                    <a class="navbar-brand" href="#" style="font-style: italic">DiscoMuse.com</a>-->
            <button type="button" class="navbar-toggle" data-target="#navbarCollapse" data-toggle="collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>

        <!--             !!! N A V B A R   M E N U !!! -->
        <div class="navbar-collapse collapse" id="navbarCollapse">

            <!--                !!! N A V B A R   L I S T !!!-->
            <ul class="nav navbar-nav">
                <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#" style="color: yellow">
                        @if(isset($genre_name))
                            {{ trans('genres.genre_names.' . $genre_name) }}

                        @else
                            Select the Genre
                        @endif

                        <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="/genre/pop">{{ trans('genres.genre_names.pop') }}</a></li>
                        <li><a href="/genre/rock">{{ trans('genres.genre_names.rock') }}</a></li>
                        <li><a href="/genre/hip-hop">{{ trans('genres.genre_names.hip-hop') }}</a></li>
                        <li><a href="/genre/metal">{{ trans('genres.genre_names.metal') }}</a></li>
                        <li><a href="/genre/electronic">{{ trans('genres.genre_names.electronic') }}</a></li>
                        <li><a href="/genre/other">{{ trans('genres.genre_names.other') }}</a></li>
                    </ul>
                </li>
                <li class="dropdown"><a class="dropdown-toggle" data-toggle="{{ isset($subgenres) ? 'dropdown' : '' }}" href="" style="color: yellowgreen">{{ isset($subgenre) ? $subgenre->name : 'Select the Subgenre '}} <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        @if(isset($subgenres))
                            @foreach ($subgenres as $subgenre)
                                <li><a href="/genre/{{ $genre_name }}/{{ $subgenre->slug }}">{{$subgenre->name}}</a></li>
                            @endforeach
                        @else
                            <li><a disabled="true">select genre first</a></li>
                        @endif
                    </ul>
                </li>

                @if(auth()->check() && auth()->user()->isAdmin())
                    <li>
                        <a href="/admin">Admin</a>
                    </li>
                @endif

                @if(auth()->check())
                    <li>
                        <a href="/user/favorites">Favorites</a>
                    </li>
                    <li>
                        <a href="#">Profile</a>
                    </li>
                @endif
            </ul>

            <!--                 !!! N A V B A R   S E A R C H !!!-->
            <form class="navbar-form navbar-left">
                <div class="input-group">
                            <span class="input-group-btn">
                                <button type="submit" class="btn btn-info">Search</button>
                            </span>
                    <label for="search" class="sr-only">Search</label>
                    <input type="text" class="form-control" id="search" placeholder="Genres, Bands, Albums etc" id="searchForm">
                    <span class="glyphicon glyphicon-search form-control-feedback"></span>
                </div>
            </form>

            <!--                 !!! N A V B A R   L O G I N   &   J O I N !!!-->
            {{--<form class="navbar-form navbar-right">--}}
            {{--<input type="button" class="btn btn-success join-login" data-target="#loginModal" data-toggle="modal" value="Login">--}}
            {{--</form>--}}

            {{--<form class="navbar-form navbar-right">--}}
            {{--<input type="button" class="btn btn-warning join-login" data-target="#signupModal" data-toggle="modal" value="Join">--}}
            {{--</form>--}}

            {{--@if (Route::has('login'))--}}
            {{--<form class="navbar-form navbar-right">--}}
            {{--@if (Auth::check())--}}
            {{--<a href="{{ url('/home') }}">Home</a>--}}
            {{--@else--}}
            {{--<a class="btn btn-success join-login" href="{{ url('/login') }}">Login</a>--}}
            {{--<a class="btn btn-warning join-login" href="{{ url('/register') }}">Join</a>--}}
            {{--<a class="btn btn-danger join-login" href="{{ url('/logout') }}">Log Out</a>--}}
            {{--@endif--}}
            {{--</form>--}}
            {{--@endif--}}

            @if (Auth::guest())
                <li><a href="{{ route('login') }}">Login</a></li>
                <li><a href="{{ route('register') }}">Register</a></li>
            @else
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <ul class="dropdown-menu" role="menu">
                        <li>
                            <a href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                Logout
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                    </ul>
                </li>
            @endif
        </div>

    </div>
</nav>

@yield('content')

@include('layouts.partials.footer')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script src="https://unpkg.com/vue"></script>
<script src="/js/app.js"></script>
<script src="/js/vue-resource.min.js"></script>

</body>
</html>
