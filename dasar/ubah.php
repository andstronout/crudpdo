<?php
require 'functions.php';

$id = $_GET['id'];
$conn = koneksi();
$anggota = "SELECT * FROM anggota WHERE id = $id";
$hasil = $conn->prepare($anggota);
$hasil->execute();
$baris = $hasil->fetch();

// // var_dump($baris);
// if (isset($_POST['tambah'])) {
//   if (ubah($_POST) > 0) {
//     echo "<script>
//             alert('data berhasil diubah!');
//             document.location.href = 'index.php';
//           </script>";
//   }
// }

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ubah Anggota</title>
</head>

<body>
  <form method="POST" action="index.php">
    <table>
      <tr>
        <label>
          Nama Lengkap
          <input type="text" name="nama" value="<?= $baris['nama']; ?>">
        </label>
      </tr>
    </table>
    <tr>
      <label>
        Jenis Kelamin
        <input type="text" name="jeniskelamin" value="<?= $baris['jeniskelamin']; ?>">
      </label>
    </tr>
    <br>
    <button type="submit" name="tambah">Kirim</button>

  </form>
</body>

</html>