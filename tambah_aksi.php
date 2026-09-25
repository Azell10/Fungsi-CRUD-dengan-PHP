<?php
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$nama   = mysqli_real_escape_string($koneksi, $_POST['nama']);
$nim    = mysqli_real_escape_string($koneksi, $_POST['nim']);
$alamat = mysqli_real_escape_string($koneksi, $_POST['alamat']);

// menginput data ke database
mysqli_query($koneksi, "insert into mahasiswa (nama, nim, alamat) values ('$nama','$nim','$alamat')");

// mengalihkan halaman kembali ke index.php
header("location:index.php");
?>
