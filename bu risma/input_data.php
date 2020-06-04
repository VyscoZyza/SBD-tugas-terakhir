

<!DOCTYPE html>
<html>
    <head>
        <title>Form Input Data Kontak</title>
    </head>
    <body>
        <form method="post" action="proses_simpan_data_kontak.php">
            <table border="0">
			<tr><span style="color: red; font-family: Verdana,Arial,Helvetica,Georgia; font-size: 35px;">INPUT DATA KONTAK</span></tr>
                <tr><td>Nama</td><td><input type="text" name="nama" maxlength="25"></td><td>*)Maks 25</td></tr>
                <tr><td>Pekerjaan</td><td><input type="text" name="pekerjaan" maxlength="20"></td><td>*)Maks 20</td></tr>
                <tr><td>Nomor HP</td><td><input type="text" name="no_hp"></td><td></td></tr>
				<tr><td>No Telepon</td><td><input type="text" name="no_telp" maxlength="12"></td><td>*)Maks 12</td></tr>
				<tr><td>Email</td><td><input type="text" name="email" maxlength="25"></td><td>*)Maks 25</td></tr>
                <tr><td colspan="2"><button type="submit" value="simpan">SIMPAN DATA</button></td><td></td></tr>
            </table>
        </form>
    </body>
</html>
