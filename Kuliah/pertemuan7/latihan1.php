<?php
//koneksi database
$db = mysqli_connect('localhost', 'root', '', 'mp3');

// Query
$result = mysqli_query($db, "SELECT * FROM kaset");

//ubah data
$rows = [];
while ($row = mysqli_fetch_assoc($result)) {
  $rows[] = $row;
}

//variabel
$kaset = $rows;
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
  <table border="1" cellpadding="10" cellspacing="0">
    <tr>

      <th>Id</th>
      <th>Nama_Peminjam</th>
      <th>Alamat</th>
      <th>Cd</th>
      <th>Tgl_peminjaman</th>
      <th>Tgl_pengembalian</th>
      <th>Aksi</th>
    </tr>

    <?php
    foreach ($kaset as $k) : ?>

      <tr>


        <td><?= $k['Id']; ?></td>
        <td><?= $k['Nama_Peminjam']; ?></td>
        <td><?= $k['Alamat']; ?></td>
        <td><?= $k['Cd']; ?></td>
        <td><?= $k['Tgl_peminjaman']; ?></td>
        <td><?= $k['Tgl_pengembalian']; ?></td>
        <td>

          <a href="">ubah</a>|<a href="">hapus</a>

        </td>

      </tr>

    <?php endforeach; ?>

  </table>
</body>

</html>