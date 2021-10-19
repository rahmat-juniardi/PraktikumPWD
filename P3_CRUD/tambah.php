<!DOCTYPE html>
<html>
<head>
	<title>
		Tambah Data Mahasiswa
	</title>
</head>
<body>
	<a href="index.php">Kembali Ke Halaman Utama</a>
	<br><br>

	<form action="tambah.php" method="post" name="form1">
		<table width="25%" border="0">
			<tr>
				<td>NIM</td>
				<td><input type="text" name="nim"></td>
			</tr>
			<tr>
				<td>NAMA</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>JENIS KELAMIN</td>
				<td><input type="text" name="jkel"></td>
			</tr>
			<tr>
				<td>ALAMAT</td>
				<td><input type="text" name="alamat"></td>
			</tr>
			<tr>
				<td>TANGGAL LAHIR</td>
				<td><input type="text" name="tgllhr"></td>
			</tr>
			<tr>
				<td>TEMPAT LAHIR</td>
				<td><input type="text" name="tmplhr"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="Submit" value="Tambah"></td>
			</tr>
		</table>
	</form>

	<?php 
		if (isset($_POST['Submit'])) {
			$nim = $_POST['nim'];
			$nama = $_POST['nama'];
			$jkel = $_POST['jkel'];
			$alamat = $_POST['alamat'];
			$tgllhr = $_POST['tgllhr'];
			$tmplhr = $_POST['tmplhr'];

			include_once("koneksi.php");

			$result = mysqli_query($con, "INSERT INTO mahasiswa(nim, nama, jkel, alamat, tgllhr, tmplhr) VALUES('$nim','$nama','$jkel','$alamat','$tgllhr','$tmplhr')");

			echo "Data berhasil disimpan. <a href='index.php'>Lihat Data</a>" ;
		}
	 ?>
</body> 
</html>