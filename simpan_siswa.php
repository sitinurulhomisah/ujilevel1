<?php
    include 'koneksi.php'; 
    if(isset($_POST['simpan']))
    {
        $id_siswa = $_POST['id_siswa']; 
        $nama_siswa = $_POST['nama_siswa'];
        $kelas = $_POST['kelas'];
        $jurusan = $_POST['jurusan'];
        $jenis_kelamin = $_POST['jenis_kelamin'];
        $email = $_POST['email'];

        $sql = 
            "INSERT INTO `data_siswa` (`id_siswa`, `nama_siswa`, `kelas`, `jurusan`, `jenis_kelamin`, `email`) VALUES ('$id_siswa', '$nama_siswa', '$kelas', '$jurusan', '$jenis_kelamin', '$email');";
        $query = mysqLi_query($connect, $sql);

    if($query){
        header('Location: tampilan_data_siswa.php');
    }else{
        header('Location: simpan_siswa.php?status=gagal');
    }
    }
?>