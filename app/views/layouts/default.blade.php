<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Thaishop</title>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="{{ URL::asset('packages/bootstrap-3.2.0/dist/css/dashboard.css') }}"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="packages/bootstrap-3.2.0/dist/js/docs.min.js"></script>
</head>
<body style="padding-top: 70px">
    @include('partials.navbar')
    @include('partials.sidebar')

    <div class="container">
        @yield('content')
    </div>
</body>
</html>