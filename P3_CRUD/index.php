<?php 
	include_once("koneksi.php");
	$result = mysqli_query($con, "SELECT * FROM mahasiswa");
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>
 		Halaman Utama
 	</title>
 </head>
 <body>
 	<a href="tambah.php">Tambah Data Baru</a>

 	<table width="80%" border=1>
 		<tr>
 			<th>NIM</th><th>NAMA</th><th>JENIS KELAMIN</th><th>ALAMAT</th><th>TANGGAL LAHIR</th><th>TEMPAT LAHIR</th>
 		</tr>
 		<?php 
 			while($user_data = mysqli_fetch_array($result)) {
 				echo "<tr>";
 				echo "<td>".$user_data['nim']."</td>";
 				echo "<td>".$user_data['nama']."</td>";
 				echo "<td>".$user_data['jkel']."</td>";
 				echo "<td>".$user_data['alamat']."</td>";
 				echo "<td>".$user_data['tgllhr']."</td>";
 				echo "<td>".$user_data['tmplhr']."</td>";
 				echo "<td><a href='edit.php?nim=$user_data[nim]'>Edit</a> | <a href='delete.php?nim=$user_data[nim]'>Delete</a></td>";
 				echo "</tr>";
 			}
 		 ?>
 	</table>
 </body>
 </html>