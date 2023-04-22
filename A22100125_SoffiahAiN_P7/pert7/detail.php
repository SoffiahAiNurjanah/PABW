 <?php
  require 'functions.php';

  //  ambil id dari URL
  $id = $_GET['id'];

  // query mahasiswa berdasarkan nim
  $mhs = query("SELECT * FROM mahasiswa WHERE id = $id");

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
     <li>NIM : <?= $mhs['NIM']; ?></li>
     <li>NAMA : <?= $mhs['NAMA']; ?></li>
     <li>JURUSAN : <?= $mhs['JURUSAN']; ?></li>
     <li>ALAMAT : <?= $mhs['ALAMAT']; ?></li>
     <li><a href="">ubah</a> | <a href="">hapus</a></li>
     <li><a href="latihan3.php">Kembali ke daftar mahasiswa</a></li>
   </ul>

 </body>

 </html>