<?php
    include ('../../config/koneksi.php');

    if (isset($_POST['submit'])){
        $jenis_surat = "Surat Keterangan Usaha";
        $nik = $_POST['fnik'];
        $nama = $_POST['fnama'];
        $tempat_tgl_lahir = $_POST['ftempat_tgl_lahir'];
        $jenis_kelamin = $_POST['fjenis_kelamin'];
        $alamat = $_POST['falamat'];
        $agama = $_POST['fagama'];
        $pekerjaan = $_POST['fpekerjaan'];
        $kewarganegaraan = $_POST['fkewarganegaraan'];
        $usaha = $_POST['fusaha'];
        $keperluan = $_POST['fkeperluan'];
        $status_surat = "PENDING";
        $id_profil_desa = "1";

        $qTambahSurat = "INSERT INTO surat_keterangan_usaha (jenis_surat, nik, nama, tempat_tgl_lahir, jenis_kelamin, alamat, agama, pekerjaan, kewarganegaraan, atribut_umum, keperluan, status_surat, id_profil_desa) VALUES('$jenis_surat', '$nik', '$nama', '$tempat_tgl_lahir', '$jenis_kelamin', '$alamat', '$agama', '$pekerjaan', '$kewarganegaraan', '$usaha', '$keperluan', '$status_surat', '$id_profil_desa')";
        $TambahSurat = mysqli_query($connect, $qTambahSurat);
        header("location:index.php?pesan=berhasil");
    }
?>