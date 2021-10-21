<html>
<head>
</head>
<body>
         <ul>
    @foreach ($siswas as $data)
    id      : {{$data['id'] }} <br>
    nama   : {{$data['nama'] }} <br>
    username : {{$data['username'] }} <br>
    email      : {{$data['email'] }} <br>
    alamat      : {{$data['alamat'] }} <br>

    Mata pelajaran :
    <ul>
    @foreach ($data['mapel'] as $mapel)
        <li>{{$mapel}}</li>
    @endforeach
    </ul>
    <hr>
    @endforeach
    </ul>
</body>
</html>
