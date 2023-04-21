<?php
require 'functions.php';
if (isset($_POST['tambah'])) {
  if (tambah($_POST) > 0) {
    echo "<script>
    alert('Data Berhasil Ditambahkan');
    document.location.href = 'latihan3.php';
    </script>";
  } else {
    echo "data gagal ditambahkan.";
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Data</title>
</head>

<body>
  <h3>Form Tambah Data</h3>
  <form action="" method="POST">
    <ul>
      <li>
        <label>
          Id :
          <input type="text" name="Id" autofocus required>
        </label>
      </li>

      <li>
        <label>
          Nama_peminjam :
          <input type="text" name="Nama_peminjam">
        </label>
      </li>

      <li>
        <label>
          Alamat :
          <input type="text" name="Alamat">
        </label>
      </li>

      <li>
        <label>
          Cd :
          <input type="text" name="Cd">
        </label>
      </li>

      <li>
        <label>
          Tgl_peminjaman :
          <input type="text" name="Tgl_peminjaman">
        </label>
      </li>

      <li>
        <label>
          Tgl_pengembalian :
          <input type="text" name="Tgl_pengembalian">
        </label>
      </li>

      <li>
        <button type="submit" name="tambah"> Tambahkan</button>
      </li>

    </ul>
  </form>

</body>

</html>