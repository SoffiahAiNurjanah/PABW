 <?php
  require 'functions.php';

  //  ambil nim dari URL
  $nim = $_GET['nim'];

  // query mahasiswa berdasarkan nim
  $mahasiswa = query("SELECT * FROM mahasiswa WHERE NIM = $nim");
  ?>

 <!DOCTYPE html>
 <html lang="en">

 <head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Detail Mahasiswa</title>
 </head>

 <body>
   <h3>Detail Mahasiswa</h3>
   <ul>
     <li>NIM : <?= $mahasiswa['NIM']; ?></li>
     <li>NAMA : <?= $mahasiswa['NAMA']; ?></li>
     <li>JURUSAN : <?= $mahasiswa['JURUSAN']; ?></li>
     <li>ALAMAT : <?= $mahasiswa['ALAMAT']; ?></li>
     <li><a href="">ubah</a> | <a href="">hapus</a></li>
     <li><a href="latihan3.php">Kembali ke daftar mahasiswa</a></li>
   </ul>

 </body>

 </html>