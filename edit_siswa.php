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
        "UPDATE data_siswa SET id_siswa='$id_siswa', nama_siswa='$nama_siswa', kelas='$kelas', jurusan='$jurusan', jenis_kelamin='$jenis_kelamin', email='$email' WHERE id_siswa='$id_siswa'"; 
    $query = mysqLi_query($connect, $sql); 

if($query){
    header('Location: tampilan_data_siswa.php');
}else{
    header('Location: edit_siswa.php?status=gagal'); 
}
}
?>