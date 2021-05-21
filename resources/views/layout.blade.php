<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{$title}}</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

</head>

<body>
        @include('navbar')  
        <div style="padding-bottom: 25px;"></div>
        <div class="container">
            @yield('content')
                <hr>
                <h6 style="text-align: right;" class="display-6 fst-italic">Developed by: <span style="color: teal">Joseph Castellon</span></h6>
        </div>

</body>

</html>