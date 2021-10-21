<!DOCTYPE html>
<html lang="en">
<head>
    <title>test bar</title>
</head>
<body>
        <h1>Data Post</h1>
        @foreach ($show as $goo )
            <p>id : {{$goo ->id}}</p>
            <p>title : {{$goo ->title}}</p>
            <p>content : {{$goo ->content}}</p>
        <hr>
        @endforeach
</body>
</html>
