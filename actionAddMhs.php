<?php
// koneksi database
include 'connection.php';

// menangkap data yang di kirim dari form
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];

// menginput data ke database
mysqli_query($connection,"insert into mahasiswa values('$nim','$nama','$alamat')");

// mengalihkan halaman kembali ke index.php
header("location:index.php");

?>
