<!DOCTYPE html>
<html lang="en">
<head>
    <title>Latihan Input Data siswa</title>
</head>
<body>
<ul>
    @foreach ($data as $dataasli)
    Nis      : {{$dataasli['Nis'] }} <br>
    Nama   : {{$dataasli['Nama'] }} <br>
    Jenis Kelamin : {{$dataasli['Jenis Kelamin'] }} <br>
    Jurusan      : {{$dataasli['Jurusan'] }} <br>
    Kelas      : {{$dataasli['Kelas'] }} <br>
    Wali Kelas      : {{$dataasli['Wali Kelas'] }} <br>
    <hr>
    @endforeach
    </ul>
</body>
</html>