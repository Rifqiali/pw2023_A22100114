<?php

function koneksi()
{
  return mysqli_connect('localhost', 'root', '', 'mp3');
}

function query($query)
{
  $db = koneksi();
  $result = mysqli_query($db, $query);

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
  $db = koneksi();
  $Id = htmlspecialchars($data['Id']);
  $Nama_peminjam = htmlspecialchars($data['Nama_peminjam']);
  $Alamat = htmlspecialchars($data['Alamat']);
  $Cd = htmlspecialchars($data['Cd']);
  $Tgl_peminjaman = htmlspecialchars($data['Tgl_peminjaman']);
  $Tgl_pengembalian = htmlspecialchars($data['Tgl_pengembalian']);

  $query = "INSERT INTO
  kaset
  VALUES
  ('$Id','$Nama_peminjam','$Alamat','$Cd','$Tgl_peminjaman','$Tgl_pengembalian');
  ";
  mysqli_query($db, $query);
  echo mysqli_error($db);
  return mysqli_affected_rows($db);
}
