<!-- Select Query -->

<?php
include ("connection.php");

// kita tampung disebuah variabel
$query = mysqli_query($connection, "select * from pegawai");

// kita tampilkan datanya
$result = mysqli_fetch_all($query, MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>List PHP</title>
</head>
<body>
  <h1>List PHP</h1>
  <a href="add.php"><button>Tambah Data</button></a>
  <br>
  <br>
  <table border="1">
    <thead>
      <tr>
        <th>Nomor</th>
        <th>Nama</th>
        <th>Jenis Kelamin</th>
        <th>Alamat</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <?php foreach($result as $index => $pegawai) : ?>
      <tr>
        <td><?= $index + 1?></td>
        <!-- Dilempar pakai params -->
        <td><a href="profile.php?id=<?=$pegawai["id"]?>"><?= $pegawai ["nama"]?></a></td>
        <td><?= $pegawai ["jenis_kelamin"]?></td>
        <td><?= $pegawai ["alamat"]?></td>
        <td>
          <a href="edit.php?id=<?=$pegawai["id"]?>"><button>Edit</button></a>
          <a href="delete.php?id=<?=$pegawai["id"]?>"><button>Delete</button></a>
        </td>
      </tr>
    <?php endforeach ?>
  </table>
</body>
</html>