<!doctype html>
<html>
<head>
	<title>Sistem Basis Data</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

<!--<link rel="stylesheet" href="style.css" > -->
</head>
<body>
<?php
            require 'navbar.php';
           ?>
	<br/>
	
	<?php
	if(isset($_GET['pesan'])){
		$pesan = $_GET['pesan'];
		if($pesan == "input"){ 
			echo " Data berhasil diinput";
		}else if($pesan == "update"){
			echo "Data berhasil diupdate";
		}else if($pesan == "hapus"){
			echo "Data berhasil dihapus";
		}
	}
	?></div>
	<br/>
	<h3 class="card-header text-center">Data Mahasiswa</h3>
	<div class ="container">
		<div class="card-body ">
			<div >
			
				<table class="table table-bordered table-responsive-md table-striped text-center">
					<thead class="thead-dark">
					<tr>
						<th style="width:2%"  class="text-center">NO</th>
						<th style="width:6%" class="text-center">NIM</th>
						<th style="width:15%" class="text-center">Nama</th>
						<th style="width:15%" class="text-center">Alamat</th>
						<th style="width:5%" class="text-center">Opsi</th>
					</tr>
					</thead>
					<tbody>
						<?php
						include "connection.php";
						$query_mysql = mysqli_query($connection, "SELECT * FROM mahasiswa")or die(mysqli_error($connection));
						$nomor = 1;
						while($data = mysqli_fetch_array($query_mysql)){
						?>
						<tr>
							<td scope="col" class="pt-3-half" ><?php echo $nomor++; ?></td>
							<td scope="col" class="pt-3-half" ><?php echo $data['nim']; ?></td>
							<td scope="col" class="pt-3-half" ><?php echo $data['nama']; ?></td>
							<td scope="col" class="pt-3-half" ><?php echo $data['alamat']; ?></td>
							<td>
							<a href ="editMhs.php?nim=<?php echo $data['nim']; ?>" class="btn btn-warning btn-rounded btn-sm my-0">Edit</a>
							 <a href ="deleteMhs.php?nim=<?php echo $data['nim']; ?>"  class="btn btn-danger btn-rounded btn-sm my-0">Hapus</a>
							</td>
						</tr>
						<?php } ?>
					<tbody>
				</table>
				<a class = "btn btn-primary float-sm-right " href="addMhs.php">+ Tambah Mahasiswa Baru</a>
			</div>
		</div>
	</div>


<br><br>
<h3 class="card-header text-center">Data Dosen</h3>
<div class ="container">
		<div class="card-body">
			<div >
				<table  class="table table-bordered table-responsive-md table-striped text-center">
					<thead class="thead-dark">
					<tr>
						<th style="width:2%" class="text-center">NO</th>
						<th style="width:6%" class="text-center">NIP</th>
						<th style="width:15%" class="text-center">Nama</th>
						<th style="width:15%" class="text-center">Kepakaran</th>
						<th style="width:5%" class="text-center">Opsi</th>

					</tr>
					</thead>
					<tbody>
						<?php
						include "connection.php";
						$query_mysql = mysqli_query($connection, "SELECT * FROM dosen")or die(mysqli_error($connection));
						$nomor = 1;
						while($data = mysqli_fetch_array($query_mysql)){
						?>
						<tr>
							<td class="pt-3-half" ><?php echo $nomor++; ?></td>
							<td class="pt-3-half" ><?php echo $data['nip']; ?></td>
							<td class="pt-3-half" ><?php echo $data['nama']; ?></td>
							<td class="pt-3-half" ><?php echo $data['kepakaran']; ?></td>
							<td>
							<a href ="editDsn.php?nip=<?php echo $data['nip']; ?>" class="btn btn-warning btn-rounded btn-sm my-0" >Edit</a>
							 <a href ="deleteDsn.php?nip=<?php echo $data['nip']; ?>"  class="btn btn-danger btn-rounded btn-sm my-0">Hapus</a>
							</td>
						</tr>
						<?php } ?>
					<tbody>
				</table>
				<a class = "btn btn-primary float-sm-right " href="addDsn.php">+ Tambah Dosen Baru</a>
			</div>
		</div>
	</div>
<br><br>
</body>
</html>
