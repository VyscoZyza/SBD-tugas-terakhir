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

	<?php
	if(isset($_GET['pesan'])){
		$pesan = $_GET['pesan'];
		if($pesan == "input"){
			echo "Data berhasil di input.";
		}else if($pesan == "update"){
			echo "Data berhasil di update.";
		}else if($pesan == "hapus"){
			echo "Data berhasil di hapus.";
		}
	}
	?>
	<br/>
	<a class="tombol" href="addMhs.php">+ Tambah Mahasiswa Baru</a>

	<h3>Data Mahasiswa</h3>
	<table border="1" class="table">
		<tr>
      <th>NO</th>
			<th>NIM</th>
			<th>Nama</th>
			<th>Alamat</th>
      <th>Opsi</th>

		</tr>
		<?php
		include "connection.php";
		$query_mysql = mysqli_query($connection, "SELECT * FROM mahasiswa")or die(mysqli_error($connection));
		$nomor = 1;
		while($data = mysqli_fetch_array($query_mysql)){
		?>
		<tr>
			<td><?php echo $nomor++; ?></td>
			<td><?php echo $data['nim']; ?></td>
			<td><?php echo $data['nama']; ?></td>
			<td><?php echo $data['alamat']; ?></td>
			<td>
				<a class="edit" href="editMhs.php?nim=<?php echo $data['nim']; ?>">Edit</a> |
				<a class="hapus" href="deleteMhs.php?nim=<?php echo $data['nim']; ?>">Hapus</a>
			</td>
		</tr>
		<?php } ?>
	</table>


<br></br><br></br>
	<a class="tombol" href="addDsn.php">+ Tambah Dosen Baru</a>

	<h3>Data Dosen</h3>
	<table border="1" class="table">
		<tr>
			<th>NO</th>
			<th>NIP</th>
			<th>Nama</th>
			<th>Kepakaran</th>
			<th>Opsi</th>

		</tr>
		<?php
		include "connection.php";
		$query_mysql = mysqli_query($connection, "SELECT * FROM dosen")or die(mysqli_error($connection));
		$nomor = 1;
		while($data = mysqli_fetch_array($query_mysql)){
		?>
		<tr>
			<td><?php echo $nomor++; ?></td>
			<td><?php echo $data['nip']; ?></td>
			<td><?php echo $data['nama']; ?></td>
			<td><?php echo $data['kepakaran']; ?></td>
			<td>
				<a class="edit" href="editDsn.php?nip=<?php echo $data['nip']; ?>">Edit</a> |
				<a class="hapus" href="deleteDsn.php?nip=<?php echo $data['nip']; ?>">Hapus</a>
			</td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>
