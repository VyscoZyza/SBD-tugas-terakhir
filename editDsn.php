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
	$nip = $_GET['nip'];
	$query_mysql = mysqli_query($connection, "SELECT * FROM dosen WHERE nip='$nip'")or die(mysqli_error($connection));
	$nomor = 1;
	while($data = mysqli_fetch_array($query_mysql)){
	?>
	<form action="updateDsn.php" method="post">
		<table>
			<tr>
				<td>NIM</td>
				<td>
					<input type="hidden" name="nip" value="<?php echo $data['nip'] ?>">
					<input type="text" name="nip" value="<?php echo $data['nip'] ?>">
				</td>
			</tr>
			<tr>
				<td>Nama</td>
				<td><input type="text" name="nama" value="<?php echo $data['nama'] ?>"></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td><input type="text" name="kepakaran" value="<?php echo $data['kepakaran'] ?>"></td>
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
