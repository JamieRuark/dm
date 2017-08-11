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

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-4">
                        <h3>Subgenres</h3>
                        <ul class="list-group">
                            <li class="list-group-item"><button type="button" class="btn btn-sm btn-default">REMOVE</button><a href="#">SUBGENRE</a></li>
                            <li class="list-group-item"><button type="button" class="btn btn-sm btn-default">REMOVE</button><a href="#">SUBGENRE</a></li>
                            <li class="list-group-item"><button type="button" class="btn btn-sm btn-default">REMOVE</button><a href="#">SUBGENRE</a></li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <h3>Bands</h3>
                        <ul class="list-group">
                            <li class="list-group-item"><button type="button" class="btn btn-sm btn-default">REMOVE</button><a href="#">ARTIST</a></li>
                            <li class="list-group-item"><button type="button" class="btn btn-sm btn-default">REMOVE</button><a href="#">ARTIST</a></li>
                            <li class="list-group-item"><button type="button" class="btn btn-sm btn-default">REMOVE</button><a href="#">ARTIST</a></li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <h3>Albums</h3>
                        <ul class="list-group">
                            <li class="list-group-item"><button type="button" class="btn btn-sm btn-default">REMOVE</button><a href="#">ALBUM</a></li>
                            <li class="list-group-item"><button type="button" class="btn btn-sm btn-default">REMOVE</button><a href="#">ALBUM</a></li>
                            <li class="list-group-item"><button type="button" class="btn btn-sm btn-default">REMOVE</button><a href="#">ALBUM</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>








<style>
    .container {
        margin-top: 200px;
    }

</style>
<div class="container">


</div>

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
