<?php
include("koneksi.php");
if(isset($_POST['tambah'])){
    $nama=$_POST['nama'];
    $gender=$_POST['gender'];
    $jurusan=$_POST['jurusan'];
    $asal_sekolah=$_POST['asal_sekolah'];
    $tempat_lahir=$_POST['tempat_lahir'];
    $tanggal_lahir=$_POST['tanggal_lahir'];
    $kapasitas=$_POST['kapasitas'];
    $terisi=$_POST['terisi'];
    
    $sql="INSERT INTO tb_jurusan(jurusan, kapasitas,terisi) VALUES ('$jurusan', '$kapasitas','$terisi')"; 
    $query=mysqli_query($koneksi,$sql);

    $sql="SELECT max(jurusan_id) AS id_jurusan FROM tb_jurusan LIMIT 1";
    $query=mysqli_query($koneksi,$sql);

    $data=mysqli_fetch_array($query);
    $id_jurusan=$data['id_jurusan'];

    $sql="INSERT INTO tb_peserta(jurusan_id,nama, gender, asal_sekolah, tempat_lahir,tanggal_lahir) VALUES 
    ('$id_jurusan','$nama','$gender','$asal_sekolah','$tempat_lahir','$tanggal_lahir')";
    $query=mysqli_query($koneksi,$sql);


    if($query){
        header('location:tampil.php?status=sukses');
    }else{
        header('location:tampil.php?status=gagal');
    }
}
?>