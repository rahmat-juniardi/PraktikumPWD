<?php 
	include_once "koneksi_penjualan.php";

	header('Content-Type: text/xml');
	$query = "SELECT * FROM penjualan";
	$hasil = mysqli_query($con,$query);
	$jumField = mysqli_num_fields($hasil);
	echo "<?xml version='1.0'?>";
	echo "<data>";
	while ($data = mysqli_fetch_array($hasil))
	{
		echo "<penjualan>";
		echo"<tulisan_belakang>",$data['tulisan_belakang'],"</tulisan_belakang>";
		echo"<nama_kucing>",$data['nama_kucing'],"</nama_kucing>";
		echo"<jenis_liontin>",$data['jenis_liontin'],"</jenis_liontin>";
		echo"<nomor_design>",$data['nomor_design'],"</nomor_design>";
		echo "</penjualan>";
	}
	echo "</data>";
?>