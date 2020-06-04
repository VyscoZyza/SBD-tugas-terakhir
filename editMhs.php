<!DOCTYPE html>
<html>
<head>
	<title>Sistem Basis Data</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="judul">
		<h2>Menampilkan data dari database</h2>
	</div>

	<br/>

	<a href="index.php">Lihat Semua Data</a>

	<br/>
	<h3>Edit data</h3>

	<?php
	include "connection.php";
	$nim = $_GET['nim'];
	$query_mysql = mysqli_query($connection, "SELECT * FROM mahasiswa WHERE nim='$nim'")or die(mysqli_error($connection));
	$nomor = 1;
	while($data = mysqli_fetch_array($query_mysql)){
	?>
	<form action="updateMhs.php" method="post">
		<table>
			<tr>
				<td>NIM</td>
				<td>
					<input type="hidden" name="nim" value="<?php echo $data['nim'] ?>">
					<input type="text" name="nim" value="<?php echo $data['nim'] ?>">
				</td>
			</tr>
			<tr>
				<td>Nama</td>
				<td><input type="text" name="nama" value="<?php echo $data['nama'] ?>"></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td><input type="text" name="alamat" value="<?php echo $data['alamat'] ?>"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan"></td>
			</tr>
		</table>
	</form>
	<?php } ?>
</body>
</html>
