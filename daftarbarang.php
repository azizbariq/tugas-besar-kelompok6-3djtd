<!DOCTYPE html>
<head>
<title>Daftar Barang</title>
</head>

<body>
<?php
include "menubarang.php";
?>
<table width="519" border="1">
  <caption align="top">
    Daftar Barang
  </caption>
  <tr>
    <th width="25" scope="col">No</th>
    <th width="103" scope="col">Kode Barang </th>
    <th width="128" scope="col">Nama Barang </th>
    <th width="60" scope="col">Harga</th>
    <th width="81" scope="col">Persediaan</th>
    <th width="82" scope="col">Action Edit</th>
     <th width="82" scope="col">Action Delete</th>
  </tr>
<?php

include "koneksi.php";
$sql = "SELECT * FROM barang";
$kueri = mysqli_query($koneksi, $sql);

$no = 1;
while($data = mysqli_fetch_array($kueri)){
    ?>
    <tr>
        <td><?php echo $no?></td>
        <td><?php 
        //penampilan data dari database
        echo $data['kodebarang']?></td>
        <td><?php echo $data['namabarang']?></td>
        <td><?php echo $data['harga'];?></td>
        <td><?php echo $data['persediaan']?></td>
        <td><a href="editbarang.php?kode=<?php echo $data['kodebarang']?>">Edit</a> </td><td><a href="delete.php?kode=<?php echo $data['kodebarang']?>">Delete</a></td>
    </tr>
    <?php
$no++;}




?>
<table width="519" border="1">
  <caption align="top">
    Daftar Makanan
  </caption>
  <tr>
    <th width="25" scope="col">No</th>
    <th width="103" scope="col">Kode Barang </th>
    <th width="128" scope="col">Nama Barang </th>
    <th width="60" scope="col">Harga</th>
    <th width="81" scope="col">Persediaan</th>
    <th width="82" scope="col">Action Edit</th>
     <th width="82" scope="col">Action Delete</th>
  </tr>
<?php


$sql = "SELECT * FROM makanan";
$kueri = mysqli_query($koneksi, $sql);

$no = 1;
while($data = mysqli_fetch_array($kueri)){
    ?>
    <tr>
        <td><?php echo $no?></td>
        <td><?php 
        //penampilan data dari database
        echo $data['kodebarang']?></td>
        <td><?php echo $data['namabarang']?></td>
        <td><?php echo $data['harga'];?></td>
        <td><?php echo $data['persediaan']?></td>
        <td><a href="editbarang.php?kode=<?php echo $data['kodebarang']?>">Edit</a> </td><td><a href="delete.php?kode=<?php echo $data['kodebarang']?>">Delete</a></td>
    </tr>
    <?php
$no++;}




?>
<table width="519" border="1">
  <caption align="top">
    Daftar Minuman
  </caption>
  <tr>
    <th width="25" scope="col">No</th>
    <th width="103" scope="col">Kode Barang </th>
    <th width="128" scope="col">Nama Barang </th>
    <th width="60" scope="col">Harga</th>
    <th width="81" scope="col">Persediaan</th>
    <th width="82" scope="col">Action Edit</th>
     <th width="82" scope="col">Action Delete</th>
  </tr>
<?php



$sql = "SELECT * FROM minuman";
$kueri = mysqli_query($koneksi, $sql);

$no = 1;
while($data = mysqli_fetch_array($kueri)){
    ?>
    <tr>
        <td><?php echo $no?></td>
        <td><?php 
        //penampilan data dari database
        echo $data['kodebarang']?></td>
        <td><?php echo $data['namabarang']?></td>
        <td><?php echo $data['harga'];?></td>
        <td><?php echo $data['persediaan']?></td>
        <td><a href="editbarang.php?kode=<?php echo $data['kodebarang']?>">Edit</a> </td><td><a href="delete.php?kode=<?php echo $data['kodebarang']?>">Delete</a></td>
    </tr>
    <?php
$no++;}
?>
</table>
</body>
</html>