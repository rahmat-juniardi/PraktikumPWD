<?php 
	include_once("koneksi_penjualan.php");

	$nama_kucing = $_GET['nama_kucing'];

	$result = mysqli_query($con, "DELETE FROM penjualan WHERE nama_kucing='$nama_kucing'");

	header("Location: halaman_home.php");
 ?>