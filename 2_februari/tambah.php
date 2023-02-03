<!DOCTYPE html>
<html lang="en">
<head>  
<title>data tambah</title>
</head>
<body>
<center>
    <header>
    <h1>data tambah</h1>
</header>
    <form action="proses-tambah.php" method="POST">
        <form>
            <fieldset>
                <p>
                    <label for="nama">Nama  : </label>
                    <input type="text" name="nama" />
</p>
                <p>
                    <label for="gender">gender : </label>
                    <label><input type="radio" name="gender" value="Laki-laki"/> Laki - laki </label>
                    <label><input type="radio" name="gender" value="Perempuan"/> Perempuan </label>
</p>
                <p>
                    <label for="jurusan">jurusan: </label>
                    <input type="text" name="jurusan" />
</p>
                <p>
                    <label for="asal_sekolah">Asal sekolah : </label>
                    <input type="text" name="asal_sekolah" />
</p>
                <p>
                        <label for="tempat_lahir">Tempat lahir : </label>
                        <input type="text" name="tempat_lahir" />
</p>
                <p>
                    <label for="tanggal_lahir">Tanggal lahir : </label>
                    <input type="date" name="tanggal_lahir" />
</p>
                <p>
                    <label for="kapasitas">kapasitas  : </label>
                    <input type="text" name="kapasitas" />
</p>
                <p>
                    <label for="terisi">Terisi  : </label>
                    <input type="text" name="terisi" />
</p>

                <p>
                    <input type="submit" value="tambah" name="tambah" />
</p>
</center>
</fieldset>
<form>
</body>
</html>