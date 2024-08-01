<?php
include ("connection.php");

// Untuk menangkap data yang dilempar dari add.php
// echo "<pre>";
// print_r($_POST);
$id = $_POST["id"];
$nama = $_POST["nama"];
$jenis_kelamin = $_POST["jenis_kelamin"];
$alamat = $_POST["alamat"];
$tempat_lahir = $_POST["tempat_lahir"];
$tanggal_lahir = $_POST["tanggal_lahir"];
$nomor_seluler = $_POST["nomor_seluler"];
$status_nikah = $_POST["status_nikah"];

try{
  mysqli_query($connection, 
  "update pegawai 
    set nama = '$nama',
    jenis_kelamin = '$jenis_kelamin',
    alamat = '$alamat',
    tempat_lahir = '$tempat_lahir',
    tanggal_lahir = '$tanggal_lahir',
    nomor_seluler = '$nomor_seluler',
    status_nikah = '$status_nikah'
    where id = $id
    ");
  header('Location:list.php');
} catch (Exception $e) {
  echo "Gagal update data kedalam database : " . $e->getMessage();
}
?>