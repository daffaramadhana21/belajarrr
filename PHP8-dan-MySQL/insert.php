<?php
include ("connection.php");

// Untuk menangkap data yang dilempar dari add.php
// echo "<pre>";
// print_r($_POST);
$nama = $_POST["nama"];
$jenis_kelamin = $_POST["jenis_kelamin"];
$alamat = $_POST["alamat"];
$tempat_lahir = $_POST["tempat_lahir"];
$tanggal_lahir = $_POST["tanggal_lahir"];
$nomor_seluler = $_POST["nomor_seluler"];
$status_nikah = $_POST["status_nikah"];

try{
  mysqli_query($connection, "insert into pegawai (nama, jenis_kelamin, alamat, tempat_lahir, tanggal_lahir, nomor_seluler, status_nikah) values ('$nama', '$jenis_kelamin', '$alamat', '$tempat_lahir', '$tanggal_lahir', '$nomor_seluler', '$status_nikah')");
  header('Location:list.php');
} catch (Exception $e) {
  echo "Gagal insert data kedalam database : " . $e->getMessage();
}
?>