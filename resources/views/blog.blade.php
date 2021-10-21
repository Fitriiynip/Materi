<!DOCTYPE html>
<html lang="en">
<head>
    <title>this for show with foreach</title>
</head>
<body>
    <h2> Tampilkan data<h2>
    
    <ul>
    @foreach ($data as $dataasli)
    id      : {{$dataasli['id'] }} <br>
    title   : {{$dataasli['title'] }} <br>
    content : {{$dataasli['content'] }} <br>
    <hr>
    @endforeach
    </ul>
</body>
</html>