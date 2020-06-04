<?php
include 'koneksi.php';

$table_name = 'kontak';

$sql = 'SELECT * 
		FROM `' . $table_name . '`';
		
$query = mysqli_query($conn, $sql);

if (!$query) {
	die ('SQL Error: ' . mysqli_error($conn));
}

echo '<table border="1">
		<thead>
			<tr>
				<th>&nbsp; ID KONTAK&nbsp;</th>
				<th>&nbsp;NAMA &nbsp;</th>
				<th>&nbsp;PEKERJAAN &nbsp;</th>
				<th>&nbsp;NO HP &nbsp;</th>
				<th>&nbsp; TELEPON KANTOR &nbsp;</th>
				<th>&nbsp; EMAIL&nbsp;</th>
				<th colspan = "2">Menu Tindakan</th>
			</tr>
		</thead>
		<tbody>';
		
while ($row = mysqli_fetch_array($query))
{
	echo '<tr>
			<td>'.$row['id_kontak'].'</td>
			<td>'.$row['nama_kontak'].'</td>
			<td>'.$row['pekerjaan'].'</td>
			<td>'.$row['no_hp'].'</td>
			<td>'.$row['tlp_kantor'].'</td>
			<td>'.$row['email'].'</td>
			<td><a href="proses_hapus_data.php?id='.$row['id_kontak'].'&nama='.$row['nama_kontak'].'; ">Hapus</a></td>
			<td><a href="edit_data_kontak.php?id='.$row['id_kontak'].'">Edit</a></td>
		</tr>';
}
echo '
	</tbody>
</table>';

//<td><a href="delete1.php?nim= <?php echo .$row[nim].; ">Delete2</td>
// Apakah kita perlu menjalankan fungsi mysqli_free_result() ini? baca bagian VII
mysqli_free_result($query);

// Apakah kita perlu menjalankan fungsi mysqli_close() ini? baca bagian VII
mysqli_close($conn);
?>
<html>
<a href="/contoh_php/input_data.php"> <button type="submit" value="simpan">Tambah Data</button></a>
</html>