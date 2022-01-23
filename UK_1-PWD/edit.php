<?php 
	include_once("koneksi_penjualan.php");

	if(isset($_POST['update']))
	{
		$tulisan_belakang = $_POST['tulisan_belakang'];
		$nama_kucing = $_POST['nama_kucing'];
		$jenis_liontin = $_POST['jenis_liontin'];
		$nomor_design = $_POST['nomor_design'];


		$result = mysqli_query($con, "UPDATE penjualan SET nama_kucing='$nama_kucing', tulisan_belakang='$tulisan_belakang', jenis_liontin='$jenis_liontin', nomor_design='$nomor_design' WHERE nama_kucing='$nama_kucing'");

		header("Location: halaman_home.php");
	}
 ?>
 <?php 
 	$nama_kucing = $_GET['nama_kucing'];

 	$result = mysqli_query($con, "SELECT * FROM penjualan WHERE nama_kucing='$nama_kucing'");

 	while($user_data = mysqli_fetch_array($result))
	{
	    $tulisan_belakang = $user_data['tulisan_belakang'];
		$jenis_liontin = $user_data['jenis_liontin'];
		$nomor_design = $user_data['nomor_design'];
	}
  ?>

<!DOCTYPE html>
<html>
<head>
	<title>
		Edit Data Penjualan
	</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="shortcut icon" href="https://cf.shopee.co.id/file/bf9360246d76a7c318081b87242532eb_tn">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<div class="main">
		<div class="container">
			<br><br>

			<button type="button" class="btn btn-primary mb-3" onclick="backHome()">Kembali Ke Halaman Utama</button>
			<br><br>

			<form action="edit.php" method="post" name="form1">
				<table width="25%" border="0">
					<tr>
						<td>TULISAN BELAKANG</td>
						<td><input class="form-control" type="text" name="tulisan_belakang" value=<?= $tulisan_belakang?>></td>
					</tr>
					<tr>
						<td>NAMA KUCING</td>
						<td><input class="form-control" type="text" name="nama_kucing" value=<?= $nama_kucing?>></td>
					</tr>
					<tr>
						<td>JENIS LIONTIN</td>
						<td><input class="form-control" type="text" name="jenis_liontin" value=<?= $jenis_liontin?>></td>
					</tr>
					<tr>
						<td>NO DESIGN</td>
						<td><input class="form-control" type="text" name="nomor_design" value=<?= $nomor_design?>></td>
					</tr>
					<tr>
						<td></td>
						<td><input class="btn btn-success mb-3" type="submit" name="update" value="Update"></td>
					</tr>
				</table>
			</form>
		</div>
	</div>

	<script type="text/javascript">
	 	function backHome(){
	      location.href = "halaman_home.php";
	    }
	 </script>

</body> 
</html>
