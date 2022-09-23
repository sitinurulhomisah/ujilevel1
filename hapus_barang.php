<?php
include 'koneksi.php'; 
if (isset($_GET['kode_barang'])) 

    $kode_barang = $_GET['kode_barang']; 
    $sql = "DELETE FROM data_barang WHERE kode_barang='$kode_barang'"; 
    $query = mysqli_query($connect, $sql);
    
if($query){
    header('Location: tampilan_data_barang.php');
}else{
    header('Location: hapus_barang.php?status=gagal');
}
?>