<?php
// koneksi Mysql
$servername = "localhost";
$username = "root";
$password = "";
$db = "barang";
// buat koneksi
$koneksi = mysqli_connect($servername, $username, $password,$db);
// cek koneksi
if (!$koneksi) {
die("Connection failed: " . mysqli_connect_error());
}
?>