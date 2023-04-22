<?php
require 'functions.php';
$Id = $_GET['Id'];
$k = query("SELECT * FROM kaset WHERE Id = $Id");

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detail Peminjam</title>
  <link rel="stylesheet" href="sytle.css">
</head>

<body>
  <h3> Detail Peminjam</h3>
  <ul>
    <li>Alamat: <?= $k['Alamat']; ?></li>
    <li>Cd: <?= $k['Cd']; ?></li>
    <li>Tgl Peminjaman:<?= $k['Tgl_peminjaman']; ?></li>
    <li>Tgl Pengembalian: <?= $k['Tgl_pengembalian']; ?></li>
    <li><a href="">ubah</a>|<a href="">hapus</a></li>
    <li><a href="latihan3.php">kembali</a></li>
  </ul>
</body>

</html>