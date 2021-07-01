<?php
  include "koneksi.php";

if(isset($_GET['kode'])){
   $kode = $_GET['kode'];
} else {
    
    echo "<script>alert('Kode Barang Belum Dipilih');document.location='daftarbarang.php'</script>";
}

//pengambilan data
   $sql = "SELECT * FROM barang WHERE kodebarang='$kode'";
   $kueri = mysqli_query($koneksi, $sql);
   $data = mysqli_fetch_array($kueri);
   $kodebrg = $data['kodebarang'];
   $namabrg = $data['namabarang'];
   $harga = $data['harga'];
   $persediaan = $data['persediaan'];
   
?>


<html>
<head><title>Edit Data Barang</title>
<script language="javascript">
function cekform(){
    
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
    } else {
        return true;
    }
}

</script>
</head>
<body>
Edit Barang
<form action="" method="post" name="frmbarang" onsubmit="return cekform()">
<table width="500" border="1">
  <tr>
    <td width="163">Kode Barang </td>
    <td width="321"><input name="txtkode" type="text" id="txtkode" size="5" maxlength="5" value="<?php echo $kodebrg ?>" readonly/></td>
  </tr>
  <tr>
    <td>Nama Barang </td>
    <td><input name="txtnama" type="text" id="txtnama" value="<?php echo $namabrg?>"/></td>
  </tr>
  <tr>
    <td>Harga</td>
    <td><input name="txtharga" type="text" id="txtharga" value="<?php echo $harga?>"/></td>
  </tr>
  <tr>
    <td>Persediaan</td>
    <td><input name="txtpersediaan" type="text" id="txtpersediaan" value="<?php echo $persediaan?>"/></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input name="tblEdit" type="submit" id="tblEdit" value="Edit Barang" /></td>
  </tr>
</table>

</form>
</body>
</html>
<?php
//perintah edit
if(isset($_POST['tblEdit'])){
    
    $kode = $_POST['txtkode'];
    $nama = $_POST['txtnama'];
    $harga = $_POST['txtharga'];
    $persediaan = $_POST['txtpersediaan'];
    $jenis = $_POST['txtjenis'];
    
    $sql = "UPDATE barang SET namabarang='$nama', harga='$harga', persediaan='$persediaan' WHERE kodebarang='$kode'";
    
    $kueri = mysqli_query($koneksi, $sql);
    
    if($kueri){
    //kondisi TRUE
        echo "<script>alert('Data barang berhasil diedit'); document.location='daftarbarang.php'</script>";
    } else {
    //kondisi FALSE
        echo "<script>alert('Data barang gagal diedit')</script>";
       
        echo mysqli_error();
    }
}
?>