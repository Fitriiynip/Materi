<html>
<head>
        <title>ini menampilkan record dari database di view yah</title>
</head>
<body>
<center>
    <h1> INI TUGAS BIODATA YA GUYS</h1>
</center>
    @foreach ($xcoeg as $item)
    <h2>Name :{{$item->name}}</h2>
    <p>date of birth :{{$item->borndate}}</p>
    <p>Gender :{{$item->gender}}</p>
    <p>Address :{{$item->address}}</p>
    <p>Religion :{{$item->religion}}</p>
    <p>Age :{{$item->age}}</p>
    <p>Hobby :{{$item->hobby}}</p>
    <hr>
    @endforeach
</body>
</html>
