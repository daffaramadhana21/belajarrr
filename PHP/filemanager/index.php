<?php
$message = "Selamat Datang \n";
// Untuk mengambil file
file_put_contents('content.txt', $message, FILE_APPEND);

// Untuk membaca file
$isiFile = file_get_contents('content.txt');
echo $isiFile;
?>