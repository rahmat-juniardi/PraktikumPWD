<?php 
	include_once("koneksi.php");

	if(isset($_POST['update']))
	{
		$nim = $_POST['nim'];
		$nama = $_POST['nama'];
		$jkel = $_POST['jkel'];
		$alamat = $_POST['alamat'];
		$tgllhr = $_POST['tgllhr'];
		$tmplhr = $_POST['tmplhr'];

		$result = mysqli_query($con, "UPDATE mahasiswa SET nim='$nim', nama='$nama', jkel='$jkel', alamat='$alamat', tgllhr='$tgllhr', tmplhr='$tmplhr'");

		header("Location: index.php");
	}
 ?>
 <?php 
 	$nim = $_GET['nim'];

 	$result = mysqli_query($con, "SELECT * FROM mahasiswa WHERE nim='$nim'");

 	while($user_data = mysqli_fetch_array($result))
	{
	    $nama = $user_data['nama'];
		$jkel = $user_data['jkel'];
		$alamat = $user_data['alamat'];
		$tgllhr = $user_data['tgllhr'];
		$tmplhr = $user_data['tmplhr'];
	}
  ?>

  <!DOCTYPE html>
  <html>
  <head>
  	<title>
  		Edit User Data
  	</title>
  </head>
  <body>
  	<a href="index.php">Kembali Ke Halaman Utama</a>	
  	<br><br>

  	<form name="update_user" method="post" action="edit.php">
  		<table border="0">
  			<tr>
  				<td>Nama</td>
            	<td><input type="text" name="nama" value=<?php echo $nama;?>></td>
  			</tr>
  			<tr>
  				<td>Alamat</td>
  				<td><input type="text" name="alamat" value=<?php echo $alamat ?>></td>
  			</tr>
  			<tr>
  				<td>Jenis Kelamin</td>
  				<td><input type="text" name="jkel" value=<?php echo $jkel ?>></td>
  			</tr>
  			<tr>
  				<td>Tanggal Lahir</td>
  				<td><input type="text" name="tgllhr" value=<?php echo $tgllhr ?>></td>
  			</tr>
  			<tr>
  				<td>Tempat Lahir</td>
  				<td><input type="text" name="tmplhr" value=<?php echo $tmplhr ?>></td>
  			</tr>
  			<tr>
  				<td><input type="hidden" name="nim" value=<?php echo $_GET['nim'] ?>></td>
  				<td><input type="submit" name="update" value="Update"></td>
  			</tr>
  		</table>
  	</form>
  </body>
  </html>