<!doctype html>
<html>
<head>
	<title>Sistem Basis Data</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</head>
	<body> 
	<?php
            require 'navbar.php';
           ?>
		<div class="card">
			<div class="container">	
				<div class = "row">

					<?php
					include "connection.php";
					$nim = $_GET['nim'];
					$query_mysql = mysqli_query($connection, "SELECT * FROM mahasiswa WHERE nim='$nim'")or die(mysqli_error($connection));
					$nomor = 1;
					while($data = mysqli_fetch_array($query_mysql)){
					?>
						<div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
							<div class="card card-signin my-5">
								<div class="card-body">
									<h5 class="card-title text-center">Edit Data Mahasiswa</h5>
										<form class="form-signing" action="updateMhs.php" method="post">
											<div class="form-label-group">
											<label>NIM</label>
												<input type="number" name="nim" value="<?php echo $data['nim'] ?>" class="form-control" required autofocus>
												</div><br>

												<label>Nama</label>
												<div class="form-label-group">
												<input type="text" name="nama" value="<?php echo $data['nama'] ?>" class="form-control" required>
												</div><br>
												<label>Alamat</label>
												<div class="form-label-group">
												<input type="text" name="alamat" value="<?php echo $data['alamat'] ?>"class="form-control" required>
												</div>
												<br>
												<input class ="btn btn-warning btn-block " type="submit" value="Simpan">
												<a class = "btn btn-secondary btn-block " href="index.php">Kembali</a>	
												
											
										</form>
									</div>
      						</div>
    					</div>
					<?php } ?>
				</div>
				<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
		</div>
	</body>
</html>
