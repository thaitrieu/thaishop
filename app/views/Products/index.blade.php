<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <p>vis produkter her</p><br>
    {{--{{ $product }}--}}
    @foreach ($product as $p)
    {{ $p->name }} <br>
    @endforeach
</body>
</html>