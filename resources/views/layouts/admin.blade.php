
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

</head>
<body>

<div class="container">
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

            <a href="/">Back to home</a>

        </div>
    </nav>
</div>



<div class="container" style="margin-top: 75px">
@yield('content')

</div>

@include('layouts.partials.footer')


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="/js/bootstrap.min.js"></script>

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
