<?php

include("config.php");

// cek apakah tombol daftar sudah diklik atau belum
if(isset($_POST['daftar'])){

    // ambil data dari formulir
    $nisn = $_POST['nisn'];
    $nama = $_POST['nama'];
    $umur = $_POST['umur'];
    $jk = $_POST['jk'];
    $agama = $_POST['agama'];
    $alamat = $_POST['alamat'];
    $no_hp = $_POST['no_hp'];
    $nama_orangtua = $_POST['nama_orangtua'];

    // buat query
    $sql = "INSERT INTO siswa (nisn ,nama, umur, jk, agama, alamat, no_hp, nama_orangtua) VALUE ('$nisn' ,'$nama', '$umur', '$jk', '$agama', '$alamat', '$no_hp', '$nama_orangtua')";
    $query = mysqli_query($db, $sql);

    // apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: index.php?status=sukses');
    } else {
        // kalau gagal alihkan ke halaman index.php dengan status=gagal
        header('Location: index.php?status=gagal');
    }

} elseif(isset($_POST['simpan'])){

    // ambil data dari formulir
    $id_siswa = $_POST['id_siswa'];
    $nisn = $_POST['nisn'];
    $nama = $_POST['nama'];
    $umur = $_POST['umur'];
    $jk = $_POST['jk'];
    $agama = $_POST['agama'];
    $alamat = $_POST['alamat'];
    $no_hp = $_POST['no_hp'];
    $nama_orangtua = $_POST['nama_orangtua'];

    // buat query update
    $sql = "UPDATE siswa SET nisn='$nisn', nama='$nama', umur='$umur', jk='$jk', agama='$agama', alamat='$alamat', no_hp='$no_hp', nama_orangtua='$nama_orangtua' WHERE id_siswa=$id_siswa";
    $query = mysqli_query($db, $sql);

    // apakah query update berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php
        header('Location: index.php');
    } else {
        // kalau gagal tampilkan pesan
        die("Gagal menyimpan perubahan...");
    }

} else {
    die("Akses dilarang...");
}
?>
