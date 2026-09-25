<?php
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$id     = mysqli_real_escape_string($koneksi, $_POST['id']);
$nama   = mysqli_real_escape_string($koneksi, $_POST['nama']);
$nim    = mysqli_real_escape_string($koneksi, $_POST['nim']);
$alamat = mysqli_real_escape_string($koneksi, $_POST['alamat']);

// update data ke database
mysqli_query($koneksi, "update mahasiswa set nama='$nama', nim='$nim', alamat='$alamat' where id='$id'");

// mengalihkan halaman kembali ke index.php
header("location:index.php");
?>
