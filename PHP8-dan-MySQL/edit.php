<?php
include ("connection.php");

// Mendapatkan data berdasarkan id
$id = $_GET["id"];
$query = mysqli_query($connection,"Select * from pegawai where id = $id");
$pegawai =  mysqli_fetch_assoc($query);

// echo "<pre>";
// print_r($pegawai);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit</title>
</head>
<body>
  <h1>Edit Data</h1>
  <form method="POST" action="update.php">
      <input type="hidden" name="id" value="<?= $pegawai["id"]?>">

      <label for="">Nama</label>
      <br>
      <input type="text" name="nama" value="<?=$pegawai["nama"]?>">
      <br><br>
      <label for="">Jenis Kelamin</label>
      <br>
      <select name="jenis_kelamin" id="">
        <option value="Laki-Laki" <?php if($pegawai ["jenis_kelamin"] == "Laki-Laki") echo "selected"?>>Laki-Laki</option>
        <option value="Perempuan" <?php if($pegawai ["jenis_kelamin"] == "Perepmpuan") echo "selected"?>>Perempuan</option>
      </select>
      <br><br>
      <label for="">Alamat</label>
      <br>
      <textarea name="alamat" id=""><?=$pegawai["alamat"]?></textarea>
      <br><br>
      <label for="">Tempat Lahir</label>
      <br>
      <input type="text" name="tempat_lahir" value="<?=$pegawai["tempat_lahir"]?>">
      <br><br>
      <label for="">Tanggal Lahir</label>
      <br>
      <input type="date" name="tanggal_lahir" value="<?=$pegawai["tanggal_lahir"]?>">
      <br><br>
      <label for="">Nomor Seluler</label>
      <br>
      <input type="text" name="nomor_seluler" value="<?=$pegawai["nomor_seluler"]?>">
      <br><br>
      <label for="">Status Pernikahan</label>
      <br>
      <select name="status_nikah">
        <option value="Sudah Menikah" <?php if($pegawai ["status_nikah"] == "Sudah Menikah") echo "selected"?>>Sudah Menikah</option>
        <option value="Belum Menikah" <?php if($pegawai ["status_nikah"] == "Belum Menikah") echo "selected"?>>Belum Menikah</option>
      </select>
      <br><br>

      <button type="submit">Ubah</button>
      <a href="list.php"><button style="font-weight : bold">Kembali</button></a>
    </form>
</body>
</html>