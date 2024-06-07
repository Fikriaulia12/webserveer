<?php 
$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "db_akademik"; 
// Membuat koneksi 
$koneksi = new mysqli($servername, $username, $password, $dbname); 
// Memeriksa koneksi if ($koneksi->connect_error) 
{  die("Koneksi berhasil: " . $koneksi->connect_error); 
} 
 
?>
