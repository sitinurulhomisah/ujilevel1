<?php
include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DATA BARANG</title>

    <link rel="stylesheet" href="css/data.css">
    <link rel="stylesheet" href="css/dashboard.css">
    <link rel="stylesheet" href="style.css">

    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- font awesome -->
    <script src="https://kit.fontawesome.com/203b2af49c.js" crossorigin="anonymous"></script>

</head>
<body>
    
    <!-- dashboard -->
    <div class="dashboard">
        <div class="logo">
            <p>INVENTORY <span>SARPRAS</span></p>
        </div>
        <div class="username">
            <div class="akun">
                <div class="profil">
                    <i class="fa-solid fa-user" style="size:50px;"></i>
                </div>
                <div class="nama">
                    <h5>USERNAME</h5>
                    <p>USERNAME</p>
                </div>
            </div>
        </div>
        <div class="pilihan">
            <div class="back">
                <a href="index.php">
                    <i class="fa-solid fa-house-chimney"></i>
                </a>
            </div>
            <div class="siswa">
                <a href="tampilan_data_siswa.php">
                    <i class="fa-solid fa-server"></i>
                    DATA SISWA
                </a>
            </div>
            <div class="barang">
                <a href="tampilan_data_barang.php">
                    <i class="fa-solid fa-server"></i>
                    DATA BARANG
                </a>
            </div>
        </div>
    </div>

    <div class="table">
        <div class="bg">
            <div class="atas">
                <div class="judul">
                    <h1>Dashboard</h1>
                    <p>welcome to data barang</p>
                </div>
            </div>
            <div class="tambah">
                <i class="fa-sharp fa-solid fa-folder-plus"></i>
                <a href="data_barang.html">Tambah Baru</a>
            </div>

            <div class="data">
                <table cellspacing="0">
                    <tr>
                        <td>Kode Barang</td>
                        <td>Nama Barang</td>
                        <td>Jenis Barang</td>
                        <td>Stok Barang</td>
                        <td>Brand</td>
                        <td>Status Barang</td>
                        <td> </td>
                    </tr>
    
                    <?php 
                        $sql = "SELECT * FROM data_barang"; 
                        $query = mysqli_query ($connect, $sql);
            
                        while($data = mysqli_fetch_array($query))
                        { 
                            echo" <tr> 
                                        <td>$data[kode_barang]</td> 
                                        <td>$data[nama_barang]</td> 
                                        <td>$data[jenis_barang]</td> 
                                        <td>$data[stok_barang]</td> 
                                        <td>$data[brand]</td> 
                                        <td>$data[status_barang]</td>
                                        <td> 
                                            <a href='form_edit_barang.php?kode_barang=".$data['kode_barang']."'>
                                                Edit
                                            </a>
                                            <a href='hapus_barang.php?kode_barang=".$data['kode_barang']."'>
                                                Hapus
                                            </a>
                                        </td> 
                                  </tr>"; 
                        } 
                    ?> 
                </table>
            </div>
        </div>
        
    
        
    </div>
</body>
</html>