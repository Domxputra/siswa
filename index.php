<?php include("config.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Pendaftaran Siswa Baru</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <header>
        <h3>Siswa yang sudah mendaftar</h3>
    </header>

    <nav>
        <a href="form_daftar.php"><button type="button" class="btn btn-success mb-5">Tambah Baru</button>[+]</a>
    </nav>
    <br>
    <table border="1">
    <thead>
        <tr>
            <th>No</th>
            <th>NISN</th>
            <th>Nama</th>
            <th>Umur</th>
            <th>Jenis Kelamin</th>
            <th>Agama</th>
            <th>Alamat</th>
            <th>No HP</th>
            <th>Nama Orang Tua</th>
            <th>aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $no = 1;
        $sql = "SELECT * FROM siswa";
        $query = mysqli_query($db, $sql);

        while($siswa = mysqli_fetch_array($query)){
            echo "<tr>";
            echo "<td>".$no++."</td>";
            echo "<td>".$siswa['nisn']."</td>";
            echo "<td>".$siswa['nama']."</td>";
            echo "<td>".$siswa['umur']."</td>";
            echo "<td>".$siswa['jk']."</td>";
            echo "<td>".$siswa['agama']."</td>";
            echo "<td>".$siswa['alamat']."</td>";
            echo "<td>".$siswa['no_hp']."</td>";
            echo "<td>".$siswa['nama_orangtua']."</td>";

            echo "<td>";
            echo "<a href='ubah.php?id=".$siswa['id_siswa']."'><button class='warning'>Edit</button></a> ";
            echo "<a href='hapus.php?id=".$siswa['id_siswa']."'><button class='danger'>Hapus</button></a>";
            echo "</td>";

            echo "</tr>";
        }
        ?>
    </tbody>
    </table>
</body>
</html>
