<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
@include('inc.header')

@if(Request::is('home'))
    <h1>Base Vue with request is a home</h1>
    @include('inc.infoRegistration')
@endif

<div class="container mt-5">
    @include('inc.messages')
    <div class="row">
        <div class="col-8">
            @yield('home')
            @yield('info')
            @yield('request')
            @yield('registration')
            @yield('aut')
        </div>
    </div>
</div>
</body>
</html>

