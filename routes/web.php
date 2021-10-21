<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;
use App\Http\Controllers\PostController;
use App\http\Controllers\BarangController;
use App\http\Controllers\PesananController;
use App\http\Controllers\PembelianController;
use App\http\Controllers\PembeliController;
use App\http\Controllers\SuplierController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hi', function () {
    $human = "Coeg";
    $feel = "angry";
    $condition = "happy";

    return view('hii', compact('human','feel','condition'));
});

Route::get('posting/{nama?}/{kelas?}/{jk?}/{alamat?}', function ($nama=null, $kelas=null, $jk=null) {
    return view('post',
    [
    'a' => $nama,
    'b' => $kelas,
    'c' => $jk
    ]);
});

Route::get('/blog', function () {
    $data = [
        ['id' => 1, 'title' => 'For example', 'content' => 'For example'],
        ['id' => 2, 'title' => 'For example', 'content' => 'For example'],
        ['id' => 3, 'title' => 'For example', 'content' => 'For example'],
        ['id' => 4, 'title' => 'For example', 'content' => 'For example'],
        ['id' => 5, 'title' => 'For example', 'content' => 'For example'],
        ['id' => 6, 'title' => 'For example', 'content' => 'For example'],
        ['id' => 7, 'title' => 'For example', 'content' => 'For example'],
        ['id' => 8, 'title' => 'For example', 'content' => 'For example'],
        ['id' => 9, 'title' => 'For example', 'content' => 'For example'],
        ['id' =>10, 'title' => 'For example', 'content' => 'For example']
    ];

    return view('blog', compact('data'));
});

Route::get('/datasiswa', function () {
    $data = [
        ['Nis' => 19201753164, 'Nama' => 'Aditya Nugroho', 'Jenis Kelamin' => 'Laki-Laki', 'Jurusan' => 'RPL',
         'Kelas' => 'XII RPL 1', 'Wali Kelas' => 'Bu Herna'],
        ['Nis' => 2, 'Nama' => 'Jojo Sutanto', 'Jenis Kelamin' => 'Laki-Laki', 'Jurusan' => 'RPL',
         'Kelas' => 'XII RPL 1', 'Wali Kelas' => 'Bu Herna'],
        ['Nis' => 3, 'Nama' => 'Aditya Riman Sanjaya', 'Jenis Kelamin' => 'Laki-Laki', 'Jurusan' => 'RPL',
         'Kelas' => 'XII RPL 1', 'Wali Kelas' => 'Bu Herna'],
        ['Nis' => 4, 'Nama' => 'M. Hassanudin', 'Jenis Kelamin' => 'Laki-Laki', 'Jurusan' => 'RPL',
         'Kelas' => 'XII RPL 2', 'Wali Kelas' => 'Mis yanti'],
        ['Nis' => 5, 'Nama' => 'Alvin', 'Jenis Kelamin' => 'Laki-Laki', 'Jurusan' => 'RPL',
         'Kelas' => 'XII RPL 2', 'Wali Kelas' => 'Mis Yanti'],
        ['Nis' => 6, 'Nama' => 'Abelina', 'Jenis Kelamin' => 'Perempuan', 'Jurusan' => 'RPL',
         'Kelas' => 'XII RPl 1', 'Wali Kelas' => 'Bu Herna'],
        ['Nis' => 7, 'Nama' => 'Rehan Pratama', 'Jenis Kelamin' => 'Laki-Laki', 'Jurusan' => 'RPL',
         'Kelas' => 'XII RPl 1', 'Wali Kelas' => 'Bu Herna'],
        ['Nis' => 8, 'Nama' => 'Sandi Suryadi', 'Jenis Kelamin' => 'Laki-Laki', 'Jurusan' => 'RPL',
         'Kelas' => 'XII RPL 1', 'Wali Kelas' => 'Bu Herna'],
        ['Nis' => 9, 'Nama' => 'Adya Eka', 'Jenis Kelamin' => 'Perempuan', 'Jurusan' => 'RPL',
         'Kelas' => 'XII RPL 1', 'Wali Kelas' => 'Bu Herna'],
        ['Nis' => 10, 'Nama' => 'Adzzura Angelita', 'Jenis Kelamin' => 'Perempuan', 'Jurusan' => 'RPL',
         'Kelas' => 'XII RPL 1', 'Wali Kelas' => 'Bu Herna'],
        ['Nis' => 11, 'Nama' => 'Muhammad Fajar', 'Jenis Kelamin' => 'Laki-Laki', 'Jurusan' => 'RPL',
         'Kelas' => 'XII RPL 1', 'Wali Kelas' => 'Bu Herna  ']
    ];

    return view('datasiswa', compact('data'));
});

Route::get('/siswa', function () {

    $siswas = [
        ['id' => 1,
         'nama' => 'Aditya',
         'username' => 'xCoeg',
         'email' => 'Coegpengencuan@gmail.com',
         'alamat' => 'Bandung',
         'mapel'  => [
                        'mapel1' => 'Bahasa Inggris',
                        'mapel2' => 'Bahasa Indonesia',
                        'mapel3' => 'Bahasa Yunani'
         ]

         ],
    ];

    return view('siswa', compact('siswas'));
});

Route::get('/hobi', function () {

        $jee = [
        ['nis' => 1001,
         'nama' => 'Aditya Nugroho',
         'kelas' => 'XII RPL 1',
         'hobi'  => [
                        'hobi1' => 'Mengbadut',
                        'hobi2' => 'Overthing',
                        'hobi3' => 'Gagal'
         ]
         ],
         ['nis' => 1002,
         'nama' => 'xCoeg',
         'kelas' => 'XII RPL 1',
         'hobi'  => [
                        'hobi1' => 'Gagal',
                        'hobi2' => 'Gagal',
                        'hobi3' => 'Gagal'
         ]
         ],
    ];

    return view('hobi', compact('jee'));
});

Route::get('/testmodel', function() {
    $query =  App\Models\Post::all();

    return $query;
    });

Route::get('/test-view', function() {
        $query =  App\Models\Post::all();
        return view('test-view', compact('query'));
        });

Route::get('/biodatas', function() {
            $xcoeg =  App\Models\Biodatas::all();
            return view('biodatas', compact('xcoeg'));
            });



Route::get('/contoh', function () {
        return view('example');
        });


Route::get('/contoh', [MyController::class,'show']);

Route::get('/artikel', [PostController::class,'data']);

Route::get('/barang', [BarangController::class, 'data']);
Route::get('/pesanan', [PesananController::class, 'data']);
Route::get('/pembelian', [PembelianController::class, 'data']);
Route::get('/pembeli', [PembeliController::class, 'data']);
Route::get('/suplier', [SuplierController::class, 'data']);


//INI BATAS YAH ANJENG
//YA YOU KNOW LAH





Route::get('/rahasia', function () {
    return "ini tempat rahasia";
});

Route::get('/biodata', function () {
    echo"Nama : Aditya Nugroho<br>";
    echo"Tanggal lahir : 14 januari 2004<br>";
    echo"Jenis Kelamin : Laki-Laki<br>";
    echo"Alamat : Bandung<br>";
    echo"Usia : 17<br>";
    echo"Status: Pelajar<br>";

});

Route::get('/xc', function () {
    return"for example<br>
    ini barisan kedua<br>
    ini barisan ketiga<br>";

});

Route::get('/input/{jawaban}', function($jawaban){
    return "Udah mau nyerah belum?" . $jawaban;
});

Route::get('/neh/{nama}/{ttl}/{jk}/{alamat}/{usia}', function ($nama,$ttl,$jk,$alamat,$usia) {
    echo"Nama :" . $nama;
    echo"<br>Tanggal lahir : " . $ttl;
    echo"<br>Jenis Kelamin : " . $jk;
    echo"<br>Alamat : " . $alamat;
    echo"<br>Usia : " . $usia ;
});

Route::get('/neh/{nama?}/{ttl?}/{jk?}/{alamat?}/{usia?}',
 function ($nama="isi gblg ai sia",$ttl="ulah ksong anjing",$jk="ieu ge isian heh",$alamat="maenya sia poho alamat sia anjing",$usia="Ngora knh gs poho si anjing th") {
    echo"Nama :" . $nama;
    echo"<br>Tanggal lahir : " . $ttl;
    echo"<br>Jenis Kelamin : " . $jk;
    echo"<br>Alamat : " . $alamat;
    echo"<br>Usia : " . $usia ;
});

Route::get('/ujian/{nama?}/{kelas?}/{a?}/{b?}/{c?}/{d?}',
 function ($nama="Jangan kosong bro",$kelas="Jangan kosong bro",$a=0,$b=0,$c=0,$d=0) {
     $all= $a+$b+$c+$d;
     $ya= $all / 4;
    echo"Nama :" . $nama;
    echo"<br>Kelas : " . $kelas;
    echo"<br>Nilai Matematika : " . $a;
    echo"<br>Nilai Indonesia : " . $b;
    echo"<br>Nilai Inggris : " . $c;
    echo"<br>Nilai Produktif : " . $d ;
    echo"<br>Nilai Rata-Rata : ". $ya;
});








//INI JUGA BATAS YAH ANJENG
//BAGIAN KEBAWAH TU MAKE KONDISI YAH ADIT ASU






Route::get('pesanan/{makananan?}/{minuman?}/{cemilan?}',function($a=null,$b=null,$c=null){
    if( $a == null && $b == null && $c == null) {
        $pesan = "Anda Tidak memesan apapun, Silahkan pulang";
    } if ($a !== null) {
        $pesan = "Anda Memesan <br> Makanan :  $a <br>";
    } if ($a !== null && $b !== null) {
        $pesan = "Anda Memesan <br> Makanan :  $a <br> Minuman : $b <br>";
    } if ($a !== null && $b !== null && $c !== null) {
        $pesan = "Anda Memesan <br> Makanan :  $a <br> Minuman : $b <br> Cemilan :  $c";
    }
    return $pesan;
});
