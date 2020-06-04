<!DOCTYPE html>
<html>
<head>
	<title>Sistem Basis Data</title>
</head>
<body>

	<h2>CRUD DATA MAHASISWA</h2>
	<br/>
	<a href="index.php">KEMBALI</a>
	<br/>
	<br/>
	<h3>TAMBAH DATA MAHASISWA</h3>
	<form method="post" action="actionAddDsn.php">
		<table>
			<tr>
				<td>NIP</td>
				<td><input type="number" name="nip"></td>
			</tr>
			<tr>
				<td>Nama</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>Kepakaran</td>
				<td><input type="text" name="kepakaran"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="SIMPAN"></td>
			</tr>
		</table>
	</form>
</body>
</html>
