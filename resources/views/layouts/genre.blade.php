
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MusInfo</title>
    <link href="/storage/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Arvo" rel="stylesheet">
    <link href="/storage/main.css" rel="stylesheet">
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
                <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="" style="font-style: italic; color: red">Select the Subgenre <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        @foreach ($subgenres as $subgenre)
                            <li><a href="/genre/{{ $genre_name }}/{{ $subgenre->slug }}">{{$subgenre->name}}</a></li>
                        @endforeach
                    </ul>
                </li>
                <li>
                    <a href="/admin">Admin</a>
                </li>
                <li>
                    <a href="/user/favorites">Favorites</a>
                </li>
                <li>
                    <a href="#">Profile</a>
                </li>
                <!--                        <li class="active"><a href="#" style="text-decoration: underline; font-style: italic">about the proJect</a></li>li>-->
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

            @if (Route::has('login'))
                <form class="navbar-form navbar-right">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a class="btn btn-success join-login" href="{{ url('/login') }}">Login</a>
                        <a class="btn btn-warning join-login" href="{{ url('/register') }}">Join</a>
                        <a class="btn btn-danger join-login" href="{{ url('/logout') }}">Log Out</a>
                    @endif
                </form>
            @endif

        </div>

    </div>
</nav>


@yield('content')


@include('layouts.partials.footer')


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="/storage/js/bootstrap.min.js"></script>

<script>
    $('#myTabs a').click(function (e) {
        e.preventDefault()
        $(this).tab('show')
    });

    $("#hh").css('visibility', 'hidden');

    $(".clickable-row").click(function($) {
        window.location = $(this).data("url");
    });

</script>

</body>
</html>
