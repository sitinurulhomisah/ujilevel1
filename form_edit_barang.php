<?php
include 'koneksi.php';
     $kode_barang = $_GET['kode_barang']; 
    $sql = "SELECT * FROM data_barang WHERE kode_barang='$kode_barang'"; 
    $query = mysqLi_query($connect, $sql); 
    $data = mysqli_fetch_assoc($query); 

    if(mysqli_num_rows($query) < 1 ){ 
    die("data tidak ditemukan...");
}  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title>

    <link rel="stylesheet" href="css/form_edit_barang.css">
    <link rel="stylesheet" href="css/dashboard.css">

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

    <div class="form">
        <div class="bg-1">
            <h3>Edit Data Barang : </h3> 
        </div>

        <div class="bg-2">
            <div class="bg-2">
                <div class="bg2-img">
                    <img src="img/tanya.png" alt="">
                </div>
                <table>
                    <form action="edit_barang.php" method="post">
                        <tr>
                            <p>
                                <td>
                                    <label>Kode Barang </label>
                                </td>
                                <td>
                                    <input 
                                    type="text" 
                                    name="kode_barang" 
                                    style="width: 100%; height:30px;"
                                    value="<?php echo $data['kode_barang']?>"
                                    required="required">
                                </td>
                            </p> 
                        </tr>
        
                        <tr>
                            <p>
                                <td>
                                    <label>Nama Barang </label>
                                </td>
                                <td>
                                    <input 
                                    type="text" 
                                    name="nama_barang"
                                    style="width: 100%; height:30px;"
                                    value="<?php echo $data['nama_barang']?>">
                                </td>
                            </p>
                        </tr>
        
                        <tr>
                            <p>
                                <td>
                                    <label>Jenis Barang </label>
                                </td>
                                <td>
                                    <select name="jenis_barang" style="width: 100%; height:30px;" value="<?php echo $data['jenis_barang']?>">
                                        <option value="Elektronik">Elektronik</option>
                                        <option value="Non-Elektronik">Non-Elektronik</option>
                                    </select>
                                </td>
                            </p>
                        </tr>
        
                        <tr>
                            <p>
                                <td>
                                    <label>Stock </label>
                                </td>
                                <td>
                                    <input type="number" name="stok_barang" style="width: 100%; height:30px;" value="<?php echo $data['stok_barang']?>">
                                </td>
                            </p>
                        </tr>
        
                        <tr>
                            <p>
                                <td>
                                    <label>Brand </label>
                                </td>
                                <td>
                                    <input type="text" name="brand" style="width: auto; height:30px;" value="<?php echo $data['brand']?>">
                                </td>
                            </p>
                        </tr>
        
                        <tr>
                            <p>
                                <td>
                                    <label>Status Barang</label>
                                </td>
                                <td>
                                    <select name="status_barang" style="width: 100%; height:30px;" value="<?php echo $data['status_barang']?>">
                                        <option value="Tersedia">Tersedia</option>
                                        <option value="Tidak Tersedia">Tidak Tersedia</option>
                                    </select>
                                </td>
                            </p>
                        </tr>
                        
                        <tr>
                            <td colspan="2">
                                <input class="submit" type="submit" name="simpan" value="simpan">
                            </td>
                        </tr>
                    </form>
                </table>
            </div>
        </div>
    </div>
</body>
</html>