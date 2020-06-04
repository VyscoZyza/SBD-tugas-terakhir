<?php 
include 'koneksi.php';
$table_name = 'kontak';

$id = $_GET['id'];
$nama = $_GET['nama'];
//mysql_query("DELETE FROM $table_name WHERE id_kontak='$id'")or die(mysql_error());

// query SQL untuk insert data
$query="DELETE FROM $table_name WHERE id_kontak='$id'";

mysqli_query($conn, $query);
if (!$query) {
	die ('ERROR: Data gagal dihapus dari tabel :' . $table_name . ', dikarenakan : ' . mysqli_error($conn));
}

echo 'Data '. $nama .' berhasil dihapus dari tabel ' . $table_name . ''; 
?>



<html>
<body>
<br>
<a href=tampil_data.php>>>Klik Untuk Tampilkan Data<<"</a>
</body>
</html>