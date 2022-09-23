<?php
include 'koneksi.php';
if(isset($_POST['simpan'])) 
{
    $kode_barang = $_POST['kode_barang']; 
    $nama_barang = $_POST['nama_barang'];
    $jenis_barang = $_POST['jenis_barang'];
    $stok_barang = $_POST['stok_barang'];
    $brand = $_POST['brand'];
    $status_barang = $_POST['status_barang'];

    $sql = 
        "UPDATE data_barang SET kode_barang='$kode_barang', nama_barang='$nama_barang', jenis_barang='$jenis_barang', stok_barang='$stok_barang', brand='$brand', status_barang='$status_barang' WHERE kode_barang='$kode_barang'"; 
    $query = mysqLi_query($connect, $sql); 

if($query){
    header('Location: tampilan_data_barang.php');
}else{
    header('Location: edit_barang.php?status=gagal'); 
}
}
?>