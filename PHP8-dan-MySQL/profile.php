<?php
include ("connection.php");

// Ditangkap dengan get by id
$id = $_GET["id"];
$query = mysqli_query($connection,"Select * from pegawai where id = $id");
$pegawai =  mysqli_fetch_assoc($query);
// fetch_assoc untuk melihat data langsung

// echo "<pre>";
// print_r($pegawai);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Profile</title>
</head>
<body>
  <h1>Profile</h1>
  <a href="list.php"><button>Kembali</button></a>
  <h3><?=$pegawai["nama"]?></h3>

  <label for="">Jenis Kelamin : </label>
  <label for=""><?=$pegawai["jenis_kelamin"]?></label>
  <br>

  <label for="">Alamat : </label>
  <label for=""><?=$pegawai["alamat"]?></label>
  <br>

  <label for="">Tempat Lahir : </label>
  <label for=""><?=$pegawai["tempat_lahir"]?></label>
  <br>

  <label for="">Tanggal Lahir : </label>
  <label for=""><?=date("d M Y", strtotime($pegawai["tanggal_lahir"]))?></label>
  <br>

  <label for="">Nomor Seluler : </label>
  <label for=""><?=$pegawai["nomor_seluler"]?></label>
  <br>

  <label for="">Status Pernikahan : </label>
  <label for=""><?=$pegawai["status_nikah"]?></label>
  <br>
</body>
</html>