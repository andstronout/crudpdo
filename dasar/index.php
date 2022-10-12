<?php
require 'functions.php'
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Latihan CRUD PDO</title>
</head>

<body>
  <H1>Latihan CRUD PDO Dasar</H1>
  <a href="tambah.php">Tambah Anggota</a>
  <table border="1">
    <thead>
      <td>No</td>
      <td>Nama</td>
      <td>Jenis Kelamin</td>
      <td>Aksi</td>
    </thead>
    <?php
    $conn = koneksi();
    $sql = "SELECT * FROM  anggota";
    $hasil = $conn->prepare($sql);
    $hasil->execute();
    $no = 1;
    while ($baris = $hasil->fetch()) {
    ?>
      <tr>
        <td><?= $no; ?></td>
        <td><?= $baris['nama']; ?></td>
        <td><?= $baris['jeniskelamin']; ?></td>
        <td>
          <a href="ubah.php?id=<?= $baris['id']; ?>">Ubah</a> | <a href="hapus.php">Hapus</a>
        </td>
      </tr>
    <?php
      $no++;
    }
    ?>
    <tr>
    </tr>
  </table>
</body>

</html>