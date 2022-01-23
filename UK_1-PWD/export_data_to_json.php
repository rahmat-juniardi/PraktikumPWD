<?php
include "koneksi_penjualan.php";

$sql="select * from penjualan";
$tampil = mysqli_query($con,$sql);
if (mysqli_num_rows($tampil) > 0) {
	$no=1;
	$response = array();
	$response["data"] = array();

	while ($r = mysqli_fetch_array($tampil)) {
	 $h['tulisan_belakang'] = $r['tulisan_belakang'];
	 $h['nama_kucing'] = $r['nama_kucing'];
	 $h['jenis_liontin'] = $r['jenis_liontin'];
	 $h['nomor_design'] = $r['nomor_design'];
	 array_push($response["data"], $h);

	 }
	 echo json_encode($response);
}
else {
	 $response["message"]="tidak ada data";
	 echo json_encode($response);
 }
?>