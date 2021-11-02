<?php 
	// include_once"koneksi.php";

	// $id_user = $_POST['id_user'];
	// $nama = $_POST['nama'];
	// $email = $_POST['email'];
	// $pass = md5($_POST['password']);

	// $sql = "INSERT INTO `users`(`id_user`, `password`, `nama_lengkap`, `email`, `level`) VALUES ('$id_user', '$pass', '$nama', '$email')";

	// $query=mysqli_query($con, $sql);
	// mysqli_close($con);

	if (isset($_POST['submit'])) {
		$id_user = $_POST['id_user'];
		$nama = $_POST['nama'];
		$email = $_POST['email'];
		$pass = md5($_POST['password']);

		include_once("koneksi.php");

		$result = mysqli_query($con, "INSERT INTO `users`(`id_user`, `password`, `nama_lengkap`, `email`) VALUES ('$id_user', '$pass', '$nama', '$email')");

		echo "Data berhasil disimpan. <a href='index.php'>Lihat Data</a>" ;
	}else{
		echo "failed";
	}

	header('location:tampil_user.php');
	
 ?>