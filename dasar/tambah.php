<?php
require 'functions.php';

// cek ketika tombol tambah sudah diklik
if (isset($_POST['tambah'])) {
  if (tambah($_POST) > 0) {
    echo "<script>
            alert('data berhasil ditambahkan!');
            document.location.href = 'index.php';
          </script>";
  }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Anggota</title>
</head>

<body>
  <form method="POST" action="index.php">
    <table>
      <tr>
        <label>
          Nama Lengkap
          <input type="text" name="nama">
        </label>
      </tr>
    </table>
    <tr>
      <label>
        Jenis Kelamin
        <input type="text" name="jeniskelamin">
      </label>
    </tr>
    <br>
    <button type="submit" name="tambah">Kirim</button>

  </form>

</body>

</html>