<html>
<head>
	<title>EDIT DATA KONTAK</title>
</head>
<body>

	<h3>EDIT DATA KONTAK</h3>
 
	<?php
	include 'koneksi.php';
    $table_name = 'kontak';
	
	$id = $_GET['id'];
	$data = mysqli_query($conn,"select * from $table_name where id_kontak='$id'");
	//echo"select * from $table_name where id_kontak='$id'";
	while($d = mysqli_fetch_array($data)){
		?>
		<form method="post" action="proses_update_data.php?">
			<table>
				<tr>			
					<td>Nama</td>
					<td>
						<input type="hidden" name="id" value="<?php echo $d['id_kontak']; ?>">
						<input type="text" name="nama" value="<?php echo $d['nama_kontak']; ?>">
					</td>
				</tr>
				<tr>
					<td>Pekerjaan</td>
					<td><input type="text" name="pekerjaan" value="<?php echo $d['pekerjaan']; ?>"></td>
				</tr>
				<tr>
					<td>No Handphone</td>
					<td><input type="text" name="no_hp" value="<?php echo $d['no_hp']; ?>"></td>
				</tr>
				<tr>
					<td>Telepon Kantor</td>
					<td><input type="text" name="tlp_kantor" value="<?php echo $d['tlp_kantor']; ?>"></td>
				</tr>
				<tr>
					<td>Email</td>
					<td><input type="text" name="email" value="<?php echo $d['email']; ?>"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" value="PERBAHARUI"></td>
				</tr>		
			</table>
		</form>
		<?php 
	}
	?>
 
</body>
</html>