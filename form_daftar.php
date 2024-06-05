<!DOCTYPE html>
<html>
<head>
    <title>Formulir Pendaftaran Siswa Baru</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <header>
        <h3>Formulir Pendaftaran Siswa Baru</h3>
    </header>

    <form action="aksi.php" method="POST">

        <fieldset>
        <p>
            <label for="nisn">NISN: </label>
            <input type="text" name="nisn" placeholder="nama lengkap" />
        </p>

        <p>
            <label for="nama">Nama: </label>
            <input type="text" name="nama" placeholder="nama lengkap" />
        </p>
        <p>
            <label for="umur">umur: </label>
            <input type="text" name="umur" placeholder="nama lengkap" />
        </p>
        <p>
            <label for="jk">Jenis Kelamin: </label>
            <select name="jk">
                <option>Laki-Laki</option>
                <option>Prempuan</option>
            </select>
        </p>
        <p>
            <label for="agama">Agama: </label>
            <select name="agama">
                <option>Islam</option>
                <option>Kristen</option>
                <option>Hindu</option>
                <option>Budha</option>
                <option>Atheis</option>
            </select>
        </p>
        <p>
            <label for="alamat">Alamat: </label>
            <textarea name="alamat"></textarea>
        </p>
        <p>
            <label for="no_hp">No HP: </label>
            <input type="text" name="no_hp" placeholder="nomor hp" />
        </p>
        <p>
            <label for="nama_orangtua">Nama Orangtua: </label>
            <input type="text" name="nama_orangtua" placeholder="Masukan nama orangtua" />
        </p>
        <p>
            <input type="submit" value="Daftar" name="daftar" />
        </p>

        </fieldset>

    </form>

    </body>
</html>