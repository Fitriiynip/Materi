<html>
<head>
</head>
<body>
         <ul>
    @foreach ($jee as $data)
    Nis      : {{$data['nis'] }} <br>
    Nama   : {{$data['nama'] }} <br>
    Kelas : {{$data['kelas'] }} <br>

    Hobi :
    <ul>
    @foreach ($data['hobi'] as $iya)
        <li>{{$iya}}</li>
    @endforeach
    </ul>
    <hr>
    @endforeach
    </ul>
</body>
</html>
