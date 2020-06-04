<?php
// koneksi database
include 'connection.php';

// menangkap data yang di kirim dari form
$nip = $_POST['nip'];
$nama = $_POST['nama'];
$kepakaran = $_POST['kepakaran'];

// menginput data ke database
mysqli_query($connection,"insert into dosen values('$nip','$nama','$kepakaran')");

// mengalihkan halaman kembali ke index.php
header("location:index.php");

?>
