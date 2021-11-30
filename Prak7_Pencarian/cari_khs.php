<?php 
 include_once("koneksi.php");
 ?>

 <h3>Form Pencarian Data khs dengan php </h3>
<form action="" method="get">
	<label>Cari: </label>
	<input type="text" name="cari">
	<input type="submit" value="Cari">
</form>

<?php 
	if(isset($_GET['cari'])){
		$cari = $_GET['cari'];
		echo "<b>Hasil Pencarian : ".$cari."</b>";
	}
 ?>

 <table>
 	<tr>
 		<th>No</th>
 		<th>NIM</th>
 		<th>Kode MK</th>
 		<th>Nilai</th>
 	</tr>
 	<?php 
 		if(isset($_GET['cari'])){
 			$cari=$_GET['cari'];
 			$sql2="select mahasiswa.nim, 
			mahasiswa.nama, 
			matakuliah.kode, 
			matakuliah.namamk, 
			khs.nilai 
			
			from mahasiswa JOIN khs
			ON mahasiswa.nim = khs.nim
			
			JOIN matakuliah 
			ON khs.kodeMK = matakuliah.kode 

			where khs.nim LIKE '%".$cari."%'";

 			$sql="select * from khs where nim like'%".$cari."%'";
 			$tampil = mysqli_query($con,$sql);
 		}else{
 			$sql="select * from khs";
 			$sql2="select mahasiswa.nim, 
			mahasiswa.nama, 
			matakuliah.kode, 
			matakuliah.namamk, 
			khs.nilai 
			
			from mahasiswa JOIN khs
			ON mahasiswa.nim = khs.nim
			
			JOIN matakuliah 
			ON khs.kodeMK = matakuliah.kode";
 			$tampil=mysqli_query($con,$sql2);
 		}
 		$no=1;
 		while($r=mysqli_fetch_array($tampil)){
 	 ?>
 	 <tr>
		<td><?php echo $no++; ?></td>
		<td><?php echo $r['nim']; ?></td>
		<td><?php echo $r['nama']; ?></td>
		<td><?php echo $r['kode']; ?></td>
		<td><?php echo $r['namamk']; ?></td>
		<td><?php echo $r['nilai']; ?></td>
	</tr>
 	 <?php } ?>
 	</table>

 