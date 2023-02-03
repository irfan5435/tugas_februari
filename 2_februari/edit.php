<?php
include("koneksi.php");
if(!isset($_GET['id'])){
    header("Location:tampil.php");
}
$id=$_GET['id'];
$sql = "SELECT * FROM tb_peserta INNER JOIN tb_jurusan ON tb_peserta.jurusan_id = tb_jurusan.jurusan_id WHERE tb_peserta.id='$id'";
$query = mysqli_query($koneksi,$sql);
$row = mysqli_fetch_assoc($query);

if(mysqli_num_rows($query) < 1){
    die ("Data tidak ditemukan");
}
?>


<html>
    <head>
</head>
<body>
    <center>
    <h1>Form Edit</h1>
    <a href="tampil.php"><input type="button" value="Kembali"></a>
    <form action="proses-edit.php" method="POST">
                <input type="hidden" name="jurusan_id" value="<?php echo $row['jurusan_id']?>" />
                <p>
        <label for="nama"> Nama : </label>
        <input type="text" name="nama" value="<?php echo $row['nama']?>" />
    </p>
    <p>
        <label for="gender"> gender: </label>
        <input type="radio" name="gender" value="Laki-laki" value="<?php echo $row['gender']?>" /> Laki-laki
        <input type="radio" name="gender" value="Perempuan" value="<?php echo $row['gender']?>" /> Perempuan
    </p>
    <p>
        <label for="jurusan"> jurusan : </label>
        <input type="text" name="jurusan" value="<?php echo $row['jurusan']?>"/>
    </p>
    <p>
        <label for="asal_sekolah"> asal_sekolah: </label>
        <input type="text" name="asal_sekolah" value="<?php echo $row['asal_sekolah']?>"/>
    </p>
    <p>
         <label for="tempat_lahir">tempat_lahir : </label>
         <input type="text" name="tempat_lahir" value="<?php echo $row['tempat_lahir']?>"/>
    </p>
    <p>
        <label for="tanggal_lahir">tanggal_lahir : </label>
        <input type="text" name="tanggal_lahir" value="<?php echo $row['tanggal_lahir']?>"/>
    </p>
    <p>
         <label for="kapasitas">kapasitas : </label>
         <input type="text" name="kapasitas" value="<?php echo $row['kapasitas']?>"/>
    </p>
    <p>
         <label for="terisi">terisi : </label>
        <input type="text" name="terisi" value="<?php echo $row['terisi']?>"/>
   </p>
<p>
<input type="submit" value="edit" name="edit" /> 
</p>
</form>
</body>
</html>
</center>