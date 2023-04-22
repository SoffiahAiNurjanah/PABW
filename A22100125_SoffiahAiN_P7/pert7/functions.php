<?php

function koneksi()
{
  return mysqli_connect('localhost', 'root', '', 'tugas_pertemuan7');
}

function query($query)

{
  $conn = koneksi();

  $result = mysqli_query($conn, $query);


  // jika hasilnya hanya 1 data
  if (mysqli_num_rows($result) == 1) {
    return mysqli_fetch_assoc($result);
  }

  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }

  return $rows;
}

function tambah($data)
{
  $conn = koneksi();

  $nim = htmlspecialchars($data['NIM']);
  $nama = htmlspecialchars($data['NAMA']);
  $jurusan = htmlspecialchars($data['JURUSAN']);
  $alamat = htmlspecialchars($data['ALAMAT']);

  $query = "INSERT INTO
              mahasiswa
              VALUES
              (null, '$nim', '$nama', '$jurusan', '$alamat');
              ";
  mysqli_query($conn, $query);
  echo mysqli_error($conn);
  return mysqli_affected_rows($conn);
}
