<?php
require 'functions.php';

// cek apakah tombol tambah sudah ditekan
if (isset($_POST['tambah'])) {
  if (tambah($_POST) > 0) {
    echo "<script>
    alert('data berhasil ditambahkan');
    document.location.href = 'latihan3.php';
    </script>";
  } else {
    echo "data gagal ditambahkan";
  }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Data Mahasiswa</title>
</head>

<body>
  <h3>Form Tambah Data Mahasiswa</h3>
  <form action="" method="POST">
    <ul>
      <li>
        <label>
          NIM :
          <input type="text" name="NIM" autofocus required>
        </label>
      </li>
      <li>
        <label>
          NAMA :
          <input type="text" name="NAMA" required>
        </label>
      </li>
      <li>
        <label>
          JURUSAN :
          <input type="text" name="JURUSAN" required>
        </label>
      </li>
      <li>
        <label>
          ALAMAT :
          <input type="text" name="ALAMAT" required>
        </label>
      </li>
      <li>
        <button type="submit" name="tambah">Tambah Data</button>
      </li>
    </ul>
  </form>

</body>

</html>