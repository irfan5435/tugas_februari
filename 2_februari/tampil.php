<!DOCTYPE html>
<html>
<head>
 <title>Join Table</title>
 <center>
 <h1>DATA SISWA</h1>
 <a href=menu.php><input type="button" value="Kembali"></a>
 <a href="tambah.php"><input type="button" value="Tambah"></a>
</head>
 
<table border="1">
    <tr>
        <th>no</th>
        <th>nama</th>
        <th>Gender</th>
        <th>jurusan</th>
        <th>Asal sekolah</th>
        <th>Tempat lahir</th>
        <th>tanggal lahir</th>
        <th>kapasitas</th>
        <th>terisi</th>
        <th>Aksi</th>
    </tr>
    <?php
    include "koneksi.php";
    $query=mysqli_query($koneksi,"SELECT * FROM tb_peserta INNER JOIN tb_jurusan ON tb_peserta.jurusan_id = tb_jurusan.jurusan_id");

        $no = 1;
     foreach ($query as $row) :
    ?>
     <tr>
    <td><?= $no++; ?></td>
    <td><?= $row['nama']; ?></td> 
    <td><?= $row['gender']; ?></td>
     <td><?= $row['jurusan']; ?></td>
    <td><?= $row['asal_sekolah'] ?></td>
    <td><?= $row['tempat_lahir'] ?></td>
    <td><?= $row['tanggal_lahir'] ?></td>
    <td><?= $row['kapasitas'] ?></td>
    <td><?= $row['terisi'] ?></td>
    <td>
     <a href="edit.php?id=<?= $row['id']; ?>">Edit</a>||
     <a href="hapus.php?id=<?= $row['id']; ?>">Hapus</a>
 </td>
</tr>

    <?php endforeach; ?>
 <td>
</table>