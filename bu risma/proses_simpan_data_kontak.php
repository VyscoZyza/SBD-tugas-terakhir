<?php
include 'koneksi.php';
$table_name='kontak';

// menyimpan data kedalam variabel
$nama          = $_POST['nama'];
$pekerjaan     = $_POST['pekerjaan'];
$no_hp    	   = $_POST['no_hp'];	
$no_tlp	   = $_POST['no_telp'];
$email         = $_POST['email'];
// query SQL untuk insert data

$query="INSERT INTO $table_name SET nama_kontak='$nama',pekerjaan='$pekerjaan',no_hp='$no_hp',tlp_kantor='$no_tlp', email='$email'";
//echo "INSERT INTO $table_name SET nama_kontak='$nama',pekerjaan='$pekerjaan',no_hp='$no_hp',tlp_kantor='$no_tlp', email='$email'";

mysqli_query($conn, $query);

if (!$query) {
	die ('ERROR: Data gagal dimasukkan pada tabel ' . $table_name . ': ' . mysqli_error($conn));
}

echo 'Data Kontak='.$nama.' berhasil dimasukkan pada tabel ' . $table_name . '';
// mengalihkan ke halaman index.php
//header("location:tampil_data.php");
?>
<html>
<body>
<br>
<a href=tampil_data.php>>>Klik Untuk Tampilkan Data<<"</a>
</body>
</html>