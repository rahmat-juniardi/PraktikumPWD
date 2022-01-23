<?php
// memanggil library FPDF
require('../Prak8/fpdf.php');
// intance object dan memberikan pengaturan halaman PDF
$pdf = new FPDF('l','mm','A5');
// membuat halaman baru
$pdf->AddPage();
// setting jenis font yang akan digunakan
$pdf->SetFont('Arial','B',16);
// mencetak string
$pdf->Cell(190,7,'PROGRAM STUDI TEKNIK INFORMATIKA',0,1,'C');
$pdf->SetFont('Arial','B',12);
$pdf->Cell(190,7,'DAFTAR MAHASISWA MAKUL PEMROGRAMAN WEB DINAMIS',0,1,'C');
// Memberikan space kebawah agar tidak terlalu rapat
$pdf->Cell(10,7,'',0,1);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(50,6,'TULISAN BELAKANG',1,0);
$pdf->Cell(30,6,'NAMA KUCING',1,0);
$pdf->Cell(40,6,'JENIS LIONTIN',1,0);
$pdf->Cell(40,6,'NO DESIGN',1,1);
$pdf->SetFont('Arial','',10);

$con = mysqli_connect('localhost', 'root', '', 'db_penjualantreatandtail');

$result = mysqli_query($con, "SELECT * FROM penjualan");

while ($row = mysqli_fetch_array($result)){
	$pdf->Cell(50,6,$row['tulisan_belakang'],1,0);
	$pdf->Cell(30,6,$row['nama_kucing'],1,0);
	$pdf->Cell(40,6,$row['jenis_liontin'],1,0);
	$pdf->Cell(40,6,$row['nomor_design'],1,1);
	
}
$pdf->Output();
?>