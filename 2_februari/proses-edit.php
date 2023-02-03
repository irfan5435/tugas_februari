<?php
include("koneksi.php");
if(isset($_POST['edit'])){
    $id=$_POST['id'];
    $nama=$_POST['nama'];
    $gender=$_POST['gender'];
    $jurusan=$_POST['jurusan'];
    $asal_sekolah=$_POST['asal_sekolah'];
    $tempat_lahir=$_POST['tempat_lahir'];
    $tanggal_lahir=$_POST['tanggal_lahir'];
    $kapasitas=$_POST['kapasitas'];
    $terisi=$_POST['terisi'];

    $sql = "UPDATE tb_jurusan SET jurusan='$jurusan', kapasitas='$kapasitas', terisi='$terisi' WHERE id='$id'";
    $query= mysqli_query($koneksi,$sql);

    $sql = "UPDATE tb_peserta SET nama='$nama', nama='$nama',gender='$gender',asal_sekolah='$asal_sekolah',tempat_lahir='$tempat_lahir',tanggal_lahir='$tanggal_lahir' WHERE id='$id'";
    $query= mysqli_query($koneksi,$sql);
    
    if($query){
        header('Location:tampil.php');
    }else{
        die ("gagal mengedit");
    }}
?>