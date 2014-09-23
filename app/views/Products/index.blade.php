<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <p>vis produkter her</p><br>

    @foreach ($data as $d)
    {{ $d }} <br>
    @endforeach

</body>
</html>