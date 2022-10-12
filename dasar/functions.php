<?php
function koneksi()
{
  $conn = new PDO("mysql:host=localhost;dbname=crud", "root", "");
  return $conn;
}

function query($query)
{
  $db = koneksi();
  $result = $db->prepare($query);
}

function tambah($data)
{
  $db = koneksi();
  $nama = $_POST['nama'];
  $jenisKelamin = $_POST['jeniskelamin'];

  $sql = "INSERT INTO anggota VALUES (null,'$nama','$jenisKelamin')";
  $result = $db->prepare($sql);
  $result->execute();
}

// function ubah()
// {
//   $db = koneksi();
//   $id = $_GET['id'];
//   $nama = $_POST['nama'];
//   $jenisKelamin = $_POST['jeniskelamin'];

//   $sql = "UPDATE anggota SET
//           nama = $nama;
//           jenis kelamin = $jenisKelamin;
//           WHERE id = $id;
//   ";

//   $hasil = $db->prepare($sql);
//   $hasil->execute();
//   return $hasil;
// }
