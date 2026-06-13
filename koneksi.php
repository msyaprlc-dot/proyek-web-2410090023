<?php
$server   = "localhost";
$username = "root";
$password = "";
$database = "db_belajar";

$con=mysqli_connect($server,$username,$password,$database);	
if (!$con) {
   // Jika koneksi gagal, hentikan semua proses 
   die("Tidak dapat membuat koneksi dengan server database!");
} else {
  // echo ("koneksi berhasil");
}

// Koneksi dan memilih database di server
function db_disconnect($con) {
  // Menutup koneksi
  mysqli_close($con);
}
?>
