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
                <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#" style="font-style: italic; color: red">choose Genre  <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="/genre/pop">POP MUSIC</a></li>
                        <li><a href="/genre/rock">ROCK</a></li>
                        <li><a href="/genre/hip-hop">HIP-HOP</a></li>
                        <li><a href="/genre/metal">METAL</a></li>
                        <li><a href="/genre/electronic">ELECTRONIC</a></li>
                        <li><a href="/other-genres">OTHER</a></li>
                    </ul>
                </li>
                <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#" style="font-style: italic; color: grey" >choose Subgenre <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Traditional Heavy Metal</a></li>
                        <li><a href="#">Speed Metal</a></li>
                        <li><a href="#">Thrash Metal</a></li>
                        <li><a href="#">Death Metal</a></li>
                        <li><a href="#">Grind</a></li>
                        <li><a href="#">Black Metal</a></li>
                        <li><a href="#">Doom Metal</a></li>
                        <li><a href="#">Glam Metal Metal</a></li>
                        <li><a href="#">Power Metal</a></li>
                        <li><a href="#">Folk Metal Metal</a></li>
                        <li><a href="#">Progressive Metal</a></li>
                        <li><a href="#">Industrial Metal</a></li>
                        <li><a href="#">Symphonic Metal</a></li>
                        <li><a href="http://dm.dev/band">Groove Metal</a></li>
                        <li><a href="#">Melodic Death Metal</a></li>
                        <li><a href="#">Metalcore</a></li>
                        <li><a href="#">Deathcore</a></li>
                    </ul>
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
                    @endif
                </form>
            @endif

        </div>

    </div>
</nav>