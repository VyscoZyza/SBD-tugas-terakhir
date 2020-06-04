<?php
include 'koneksi.php';

$table_name = 'kontak';

$sql = 'CREATE TABLE IF NOT EXISTS `' . $table_name . '` (
		  `id_kontak` int(11) NOT NULL AUTO_INCREMENT,
		  `nama_kontak` varchar(25) NOT NULL,
		  `pekerjaan` varchar(20) NOT NULL,
		  `no_hp` varchar(12) NOT NULL,
		  `tlp_kantor` varchar(12) NOT NULL,
		  `email` varchar(25) NOT NULL,
		  PRIMARY KEY (`id_kontak`)
		) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1';
		
$query = mysqli_query($conn, $sql);

if (!$query) {
	die ('ERROR: Tabel ' . $table_name . ' gagal dibuat: ' . mysqli_error($conn));
}

echo 'Tabel ' . $table_name . ' berhasil dibuat <br/>';

$sql = "INSERT INTO `$table_name` (`id_kontak`, `nama_kontak`, `pekerjaan`, `no_hp`, `tlp_kantor`, `email`) 
		VALUES (1, 'Risma Septiana', 'Dosen', '085740701347', '024767367', 'rismaseptiana1209@gmail.com'),
				(2,'Burhanudin', 'Sales Mobil', '083422343235', '024224367', 'burhanudin@gmail.com'),
				(3,'Nadya Safira', 'Model', '087873663735', '0243432343', 'nadya.sf@gmail.com'),
				(4,'Dian Cintami', 'Dokter', '087784775875', '024345654', 'dn.cintami@gmail.com'),
				(5,'Rahma Yulianingtyas', 'Notaris', '084546665875', '024456567', 'rahma.yuli@gmail.com')";
		
$query = mysqli_query($conn, $sql);

if (!$query) {
	die ('ERROR: Data gagal dimasukkan pada tabel ' . $table_name . ': ' . mysqli_error($conn));
}

echo 'Data berhasil dimasukkan pada tabel ' . $table_name . '';