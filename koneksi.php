<?php
// koneksi Mysql
$servername = "mysql://bc3cd2951e4851:ea7e5e3a@us-cdbr-east-04.cleardb.com/heroku_0d20d3f33aa1507?reconnect=true";
$username = "bc3cd2951e4851";
$password = "ea7e5e3a";
$db = "barang";
// buat koneksi
$koneksi = mysqli_connect($servername, $username, $password,$db);
// cek koneksi
if (!$koneksi) {
die("Connection failed: " . mysqli_connect_error());
}
?>