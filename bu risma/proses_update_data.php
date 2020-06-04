<?php
include 'koneksi.php';
$table_name = 'kontak';

// menyimpan data kedalam variabel
$id             = $_POST['id'];
$nama           = $_POST['nama'];
$pekerjaan      = $_POST['pekerjaan'];
$no_hp          = $_POST['no_hp'];
$tlp_kantor     = $_POST['tlp_kantor'];
$email          = $_POST['email'];


// query SQL untuk insert data
$query="UPDATE $table_name SET nama_kontak='$nama',pekerjaan='$pekerjaan',no_hp='$no_hp',tlp_kantor='$tlp_kantor',email='$email' where id_kontak='$id'";

mysqli_query($conn, $query);

if (!$query) {
	die ('ERROR: Data gagal diedit pada tabel ' . $table_name . ': ' . mysqli_error($conn));
}

echo 'Data '. $nama .'  berhasil diedit pada tabel ' . $table_name . '';
// mengalihkan ke halaman index.php

//header("location:tampil_data.php");
?>
<html>
<body>
<br>
<a href=tampil_data.php>>>Klik Untuk Tampilkan Data<<"</a>
</body>
</html>