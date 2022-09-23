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
            "INSERT INTO `data_barang` (`kode_barang`, `nama_barang`, `jenis_barang`, `stok_barang`, `brand`, `status_barang`) VALUES ('$kode_barang', '$nama_barang', '$jenis_barang', '$stok_barang', '$brand', '$status_barang');";
        $query = mysqLi_query($connect, $sql);

    if($query){
        header('Location: tampilan_data_barang.php');
    }else{
        header('Location: simpan_barang.php?status=gagal');
    }
    }
?>