<?php
require 'functions.php';
$kaset = query("SELECT * FROM kaset");

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mp3</title>
</head>

<body>
  <h3>Kaset</h3>
  <a href="tambah.php">Tambah Data</a>
  <br><br>

  <table border="1" cellpadding="10" cellspacing="0">
    <tr>

      <th>Id</th>
      <th>Nama_Peminjam</th>
      <th>Aksi</th>
    </tr>

    <?php
    foreach ($kaset as $k) : ?>

      <tr>


        <td><?= $k['Id']; ?></td>
        <td><?= $k['Nama_Peminjam']; ?></td>

        <td>

          <a href="detail.php?Id=<?= $k['Id']; ?>">lihat detail</a>|

        </td>

      </tr>

    <?php endforeach; ?>

  </table>
</body>

</html>