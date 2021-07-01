<?php
//perintah delete
if(isset($_GET['kode'])){
   include "koneksi.php";
   
   $kode = $_GET['kode'];
   $sql = "DELETE FROM barang WHERE kodebarang='$kode'";
   $kueri = mysqli_query($koneksi, $sql);
   if($kueri){
       
    echo "<script>alert('Data barang berhasil dihapus');document.location='daftarbarang.php'</script>";
   } else{
   echo "<script>alert('Data barang Gagal dihapus');document.location='daftarbarang.php'</script>";
   }
} else {
    
    echo "<script>alert('Kode Barang Belum Dipilih');document.location='daftarbarang.php'</script>";
}
?>