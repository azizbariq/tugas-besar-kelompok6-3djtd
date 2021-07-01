<!DOCTYPE html>
<head>
<title>Tambah Data Barang</title>
<script language="javascript">
function cekform(){
    //pengecekan isi form
    if(document.frmbarang.txtkode.value==""){
        alert('Kode Barang Harus Diisi');
        document.frmbarang.txtkode.focus();
        return false;
    } else if(document.frmbarang.txtnama.value==""){
        alert('Nama Barang Harus Diisi');
        document.frmbarang.txtnama.focus();
        return false;
    } else if(document.frmbarang.txtharga.value==""){
        alert('Harga Barang Harus Diisi');
        document.frmbarang.txtharga.focus();
        return false;
    } else if(document.frmbarang.txtpersediaan.value==""){
        alert('Persediaan Barang Harus Diisi');
        document.frmbarang.txtpersediaan.focus();
        return false;
    } else if(document.frmbarang.txtjenis.value==""){
        alert('Jenis Barang Harus Diisi');
        document.frmbarang.txtjenis.focus();
        return false;
    } else {
        return true;
    }
}
</script>
</head>

<body>
<?php
//pilihan yang ada di tiap halaman
include "menubarang.php";
?>
<form action="" method="post" name="frmbarang" onsubmit="return cekform()">
<table width="500" border="1">
  <tr>
    <td width="163">Kode Barang </td>
    <td width="321"><input name="txtkode" type="text" id="txtkode" size="5" maxlength="5" /></td>
  </tr>
  <tr>
    <td>Nama Barang </td>
    <td><input name="txtnama" type="text" id="txtnama" /></td>
  </tr>
  <tr>
    <td>Harga</td>
    <td><input name="txtharga" type="text" id="txtharga" /></td>
  </tr>
  <tr>
    <td>Persediaan</td>
    <td><input name="txtpersediaan" type="text" id="txtpersediaan" /></td>
  </tr>
  <tr>
    <td>Jenis</td>
    <td><input name="txtjenis" type="text" id="txtjenis" /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input name="tblIsi" type="submit" id="tblIsi" value="Tambah Barang" /></td>
  </tr>
</table>

</form>
</body>
</html>
<?php
//include koneksi mysql
include "koneksi.php";
//perintah create
if(isset($_POST['tblIsi'])){
   
    $kode = $_POST['txtkode'];
    $nama = $_POST['txtnama'];
    $harga = $_POST['txtharga'];
    $persediaan = $_POST['txtpersediaan'];
    $jenis = $_POST['txtjenis'];
    
    //variabel penampung query mysql
    $sql = "INSERT INTO barang VALUES('$kode','$nama','$harga','$persediaan')";
    $sqlmakanan = "INSERT INTO makanan VALUES('$kode','$nama','$harga','$persediaan')";
    $sqlminuman = "INSERT INTO minuman VALUES('$kode','$nama','$harga','$persediaan')";
  //memasukkan data berdasarkan jenis
    if($jenis=='makanan'){
      $kueri = mysqli_query($koneksi, $sqlmakanan);
    }elseif($jenis=='minuman'){
      $kueri = mysqli_query($koneksi, $sqlminuman);
    }else{
      $kueri = mysqli_query($koneksi, $sql);
      
    }
    //pengecekan query
    if($kueri){
    //kondisi TRUE
        echo "<script>alert('Data barang berhasil dimasukkan ke database')</script>";
    } else {
    //kondisi false
        echo "<script>alert('Data barang gagal dimasukkan ke database')</script>";
        
        echo mysqli_error();
    }
}

?>