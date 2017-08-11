
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

</head>
<body>
<div class="container">
@yield('content')

</div>

@include('layouts.partials.footer')


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="/storage/js/bootstrap.min.js"></script>
<script src="/storage/123.js"></script>

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