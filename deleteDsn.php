<?php
include 'connection.php';
$nip = $_GET['nip'];
mysqli_query($connection, "DELETE FROM dosen WHERE nip='$nip'")or die(mysqli_error($connection));

header("location:index.php?pesan=hapus");
?>
