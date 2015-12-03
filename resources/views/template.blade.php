<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>

    <link href="{{ asset('/sass/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('/vendor/bootstrap/dist/css/bootstrap.min.css') }}" media="screen" title="no title" charset="utf-8">

    <!-- Fonts -->
    <link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

</head>
<body>

<div class="container">
    @yield('content')
</div>

<!-- Scripts -->
<script type="text/javascript" src="{{ asset('/vendor/dist/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('/vendor/bootstrap/dist/js/bootstrap.min.js') }}"></script>
</body>
</html>
