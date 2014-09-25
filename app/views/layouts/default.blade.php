<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Thaishop</title>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css"/>
</head>
<body style="padding-top: 70px">
    @include('partials.navbar')
    @include('partials.sidebar')
    {{--<p>default.blade.php</p>--}}
    <div class="container">
        @yield('content')
    </div>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</body>
</html>