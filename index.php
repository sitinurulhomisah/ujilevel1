<?php
include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title>

    <link rel="stylesheet" href="css/awal.css">
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

    <div class="container">
        <div class="bg">

            <div class="atas">
                <div class="judul">
                    <h1>Dashboard</h1>
                    <p>welcome to inventory sarpras</p>
                </div>
            </div>

            <div class="kedua">
                <div class="item">
                    <div class="item-1">
                        <a href="tampilan_data_siswa.php">
                            <img src="img/data-1.png" alt="">
                            <a href="tampilan_data_siswa.php">Data Siswa</a>
                        </a>
                    </div>
                    <div class="item-2">
                        <a href="tampilan_data_barang.php">
                            <img src="img/data-2.png" alt="">
                            <a href="tampilan_data_barang.php">Data Barang</a>
                        </a>
                    </div>
                </div>

                <div class="kalender">
                    <div class="bulan">
                        <i class="fa-solid fa-backward"></i>
                        <h1>SEPTEMBER 2022</h1>
                        <i class="fa-solid fa-forward"></i>
                    </div>
                    <div class="hari">
                        <div class="senin">
                            <p>Sen</p>
                        </div>
                        <div class="selasa">
                            <p>Sel</p>
                        </div>
                        <div class="rabu">
                            <p>Rab</p>
                        </div>
                        <div class="kamis">
                            <p>Kam</p>
                        </div>
                        <div class="jumat">
                            <p>Jum</p>
                        </div>
                        <div class="sabtu">
                            <p>Sab</p>
                        </div>
                        <div class="minggu">
                            <p>Ming</p>
                        </div>
                    </div>
                    <div class="tanggal">
                        <div class="minggu-1">
                            <div class="satu">
                                
                            </div>
                            <div class="dua">
                                <p>5</p>
                            </div>
                            <div class="tiga">
                                <p>12</p>
                            </div>
                            <div class="empat">
                                <p>19</p>
                            </div>
                            <div class="lima">
                                <p>26</p>
                            </div>
                        </div>
                        <div class="minggu-2">
                            <div class="satu">
                                
                            </div>
                            <div class="dua">
                                <p>6</p>
                            </div>
                            <div class="tiga">
                                <p>13</p>
                            </div>
                            <div class="empat">
                                <p>20</p>
                            </div>
                            <div class="lima">
                                <p>27</p>
                            </div>
                        </div>
                        <div class="minggu-3">
                            <div class="satu">
                                
                            </div>
                            <div class="dua">
                                <p>7</p>
                            </div>
                            <div class="tiga">
                                <p>14</p>
                            </div>
                            <div class="empat">
                                <p>21</p>
                            </div>
                            <div class="lima">
                                <p>28</p>
                            </div>
                        </div>
                        <div class="minggu-4">
                            <div class="satu">
                                <p>1</p>
                            </div>
                            <div class="dua">
                                <p>8</p>
                            </div>
                            <div class="tiga">
                                <p>15</p>
                            </div>
                            <div class="empat">
                                <p>22</p>
                            </div>
                            <div class="lima">
                                <p>29</p>
                            </div>
                        </div>
                        <div class="minggu-5">
                            <div class="satu">
                                <p>2</p>
                            </div>
                            <div class="dua">
                                <p>9</p>
                            </div>
                            <div class="tiga">
                                <p>16</p>
                            </div>
                            <div class="empat">
                                <p>23</p>
                            </div>
                            <div class="lima">
                                <p>30</p>
                            </div>
                        </div>
                        <div class="minggu-6">
                            <div class="satu">
                                <p>3</p>
                            </div>
                            <div class="dua">
                                <p>10</p>
                            </div>
                            <div class="tiga">
                                <p>17</p>
                            </div>
                            <div class="empat">
                                <p>24</p>
                            </div>
                            <div class="lima">
                                
                            </div>
                        </div>
                        <div class="minggu-7">
                            <div class="satu">
                                <p>4</p>
                            </div>
                            <div class="dua">
                                <p>11</p>
                            </div>
                            <div class="tiga">
                                <p>18</p>
                            </div>
                            <div class="empat">
                                <p>25</p>
                            </div>
                            <div class="lima">
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            
        </div>
    </div>
</body>
</html>