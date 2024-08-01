<!-- Untuk membuat koneksi php -->
<?php

// Membuat koneksi
// Bagaimana cara error handling ?
try{
  $connection = mysqli_connect("localhost", "root", "", "kepegawaian");
  // echo "Koneksi berhasil";
} catch(Exception $e) {
  echo "coba lagi..<br>" . $e -> getMessage();
  // Kita bisa print errornya kenapa dengan method getMessage();
}

?>