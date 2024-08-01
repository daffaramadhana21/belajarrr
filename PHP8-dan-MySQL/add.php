<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Data</title>
</head>
<body>
  <h1>Tambah Data</h1>
  <form method="POST" action="insert.php">
    <label for="">Nama</label>
    <br>
    <input type="text" name="nama">
    <br><br>
    <label for="">Jenis Kelamin</label>
    <br>
    <select name="jenis_kelamin" id="">
      <option value="Laki-Laki">Laki-Laki</option>
      <option value="Perempuan">Perempuan</option>
    </select>
    <br><br>
    <label for="">Alamat</label>
    <br>
    <textarea name="alamat" id=""></textarea>
    <br><br>
    <label for="">Tempat Lahir</label>
    <br>
    <input type="text" name="tempat_lahir">
    <br><br>
    <label for="">Tanggal Lahir</label>
    <br>
    <input type="date" name="tanggal_lahir">
    <br><br>
    <label for="">Nomor Seluler</label>
    <br>
    <input type="text" name="nomor_seluler">
    <br><br>
    <label for="">Status Pernikahan</label>
    <br>
    <select name="status_nikah">
      <option value="Sudah Menikah">Sudah Menikah</option>
      <option value="Belum Menikah">Belum Menikah</option>
    </select>
    <br><br>

    <button type="submit">Tambah</button>
    <a href="list.php"><button style="font-weight : bold">Kembali</button></a>
  </form>
</body>
</html>