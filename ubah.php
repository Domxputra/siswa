<?php

include("config.php");

// kalau tidak ada id di query string
if( !isset($_GET['id']) ){
    header('Location: index.php');
    exit;
}

// ambil id dari query string
$id = $_GET['id'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM siswa WHERE id_siswa=$id";
$query = mysqli_query($db, $sql);
$siswa = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Formulir Edit Siswa | SMK Coding</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <header>
        <h3>Formulir Edit Siswa</h3>
    </header>

    <form action="aksi.php" method="POST">
        <fieldset>
            <input type="hidden" name="id_siswa" value="<?php echo $siswa['id_siswa'] ?>" />

            <p>
                <label for="nisn">NISN: </label>
                <input type="text" name="nisn" placeholder="nama lengkap" value="<?php echo $siswa['nisn'] ?>" />
            </p>
            <p>
                <label for="nama">Nama: </label>
                <input type="text" name="nama" placeholder="nama lengkap" value="<?php echo $siswa['nama'] ?>" />
            </p>
            <p>
                <label for="umur">Umur: </label>
                <input type="text" name="umur" placeholder="umur" value="<?php echo $siswa['umur'] ?>" />
            </p>
            <p>
                <label for="jk">Jenis Kelamin: </label>
                <?php $jk = $siswa['jk']; ?>
                <label><input type="radio" name="jk" value="laki-laki" <?php echo ($jk == 'laki-laki') ? "checked": "" ?>> Laki-laki</label>
                <label><input type="radio" name="jk" value="perempuan" <?php echo ($jk == 'perempuan') ? "checked": "" ?>> Perempuan</label>
            </p>
            <p>
                <label for="agama">Agama: </label>
                <?php $agama = $siswa['agama']; ?>
                <select name="agama">
                    <option <?php echo ($agama == 'Islam') ? "selected": "" ?>>Islam</option>
                    <option <?php echo ($agama == 'Kristen') ? "selected": "" ?>>Kristen</option>
                    <option <?php echo ($agama == 'Hindu') ? "selected": "" ?>>Hindu</option>
                    <option <?php echo ($agama == 'Budha') ? "selected": "" ?>>Budha</option>
                    <option <?php echo ($agama == 'Katolik') ? "selected": "" ?>>Katolik</option>
                </select>
            </p>
            <p>
                <label for="alamat">Alamat: </label>
                <textarea name="alamat"><?php echo $siswa['alamat'] ?></textarea>
            </p>
            <p>
                <label for="no_hp">No HP: </label>
                <input type="text" name="no_hp" placeholder="nomor hp" value="<?php echo $siswa['no_hp'] ?>" />
            </p>
            <p>
                <label for="nama_orangtua">Nama Orang Tua: </label>
                <input type="text" name="nama_orangtua" placeholder="nama orangtua" value="<?php echo $siswa['nama_orangtua'] ?>" />
            </p>
            <p>
                <input type="submit" value="Simpan" name="simpan" />
            </p>
        </fieldset>
    </form>
</body>
</html>
