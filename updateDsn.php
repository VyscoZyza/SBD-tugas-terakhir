<?php

include 'connection.php';
$nip = $_POST['nip'];
$nama = $_POST['nama'];
$kepakaran = $_POST['kepakaran'];


mysqli_query($connection, "UPDATE dosen SET nip='$nip', nama='$nama', kepakaran='$kepakaran' WHERE nip='$nip'");

header("location:index.php?pesan=update");
?>
