<?php

include 'connection.php';
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];


mysqli_query($connection, "UPDATE mahasiswa SET nim='$nim', nama='$nama', alamat='$alamat' WHERE nim='$nim'");

header("location:index.php?pesan=update");
?>
