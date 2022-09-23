<?php
include 'koneksi.php';
     $id_siswa = $_GET['id_siswa']; 
    $sql = "SELECT * FROM data_siswa WHERE id_siswa='$id_siswa'"; 
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
    <title>EDIT DATA</title>

    <!-- <link rel="stylesheet" href="css/form_edit.css"> -->
    <link rel="stylesheet" href="css/dashboard.css">
    <link rel="stylesheet" href="css/form_edit_siswa.css">

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
            <h3>Edit Data siswa : </h3> 
        </div>

        <div class="bg-2">
            <div class="bg2-img">
                <img src="img/tanya.png" alt="">
            </div>
            <table>
                <form action="edit_siswa.php" method="post">
                    <tr>
                        <p>
                            <td>
                                <label>Id Siswa </label>
                            </td>
                            <td>
                                <input 
                                type="text" 
                                name="id_siswa" 
                                style="width: 100%; height:40px;"
                                value="<?php echo $data['id_siswa']?>"
                                required="required">
                            </td>
                        </p> 
                    </tr>
    
                    <tr>
                        <p>
                            <td>
                                <label>Nama Siswa </label>
                            </td>
                            <td>
                                <input 
                                type="text" 
                                name="nama_siswa"
                                style="width:100%; height:40px;"
                                value="<?php echo $data['nama_siswa']?>">
                            </td>
                        </p>
                    </tr>
    
                    <tr>
                        <p>
                            <td>
                                <label>Kelas </label>
                            </td>
                            <td>
                                <select name="kelas" style="width: 350px; height:40px;" value="<?php echo $data['kelas']?>">
                                    <option value="X">X</option>
                                    <option value="XI">XI</option>
                                    <option value="XII">XII</option>
                                </select>
                            </td>
                        </p>
                    </tr>
    
                    <tr>
                        <p>
                            <td>
                                <label>Jurusan </label>
                            </td>
                            <td>
                                <select name="jurusan" style="width: 100%; height:40px;" value="<?php echo $data['jurusan']?>">
                                    <option value="TJKT 1">TJKT 1</option>
                                    <option value="TJKT 2">TJKT 2</option>
                                    <option value="TJKT 1">TJKT 3</option>
                                    <option value="TJKT 2">TJKT 4</option>
                                    <option value="ANIMASI 1">ANIMASI 1</option>
                                    <option value="ANIMASI 2">ANIMASI 2</option>
                                    <option value="ANIMASI 3">ANIMASI 3</option>
                                    <option value="ANIMASI 4">ANIMASI 4</option>
                                    <option value="PPLG 1">PPLG 1</option>
                                    <option value="PPLG 2">PPLG 2</option>
                                    <option value="PPLG 2">PPLG 3</option>
                                    <option value="BRF">BRF 1</option>
                                    <option value="BRF">BRF 2</option>
                                    <option value="TE">TE</option>
                                </select>
                            </td>
                        </p>
                    </tr>
    
                    <tr>
                        <p>
                            <td>
                                <label>Jenis kelamin </label>
                            </td>
                            <td style="text-align:center;">
                                <label><input type="radio" name="jenis_kelamin" value="laki-laki" <?php if($data['jenis_kelamin']=='laki-laki') echo 'checked'?> />L</label>
                                <label><input type="radio" name="jenis_kelamin" value="Perempuan" <?php if($data['jenis_kelamin']=='Perempuan') echo 'checked'?> />P</label>
                            </td>
                        </p>
                    </tr>
    
                    <tr>
                        <p>
                            <td><label>Email </label></td>
                            <td><input type="email" name="email" style="width: 100%; height:40px;" value="<?php echo $data['email']?>"></td>
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
</body>
</html>