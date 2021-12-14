<?php
	include "koneksi.php";

	$id_user = $_POST['id_user'];
	$pass=md5($_POST['password']);
	
	$sql="SELECT * FROM users WHERE id_user='$id_user' AND password='$pass'";
	$login=mysqli_query($con,$sql);
	$ketemu=mysqli_num_rows($login);
	$r= mysqli_fetch_array($login);


?>

<!DOCTYPE html>
<html>
<head>
	<title>Treat and Tail</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="shortcut icon" href="https://cf.shopee.co.id/file/bf9360246d76a7c318081b87242532eb_tn"></link>
</head>
<body>
	<?php 
		if ($ketemu > 0){
			session_start();
			$_SESSION['iduser'] = $r['id_user'];
			$_SESSION['passuser'] = $r['password'];
			// echo"USER BERHASIL LOGIN<br>";
			// echo "id user =",$_SESSION['iduser'],"<br>";
			// echo "password=",$_SESSION['passuser'],"<br>";
			// echo "<a href=logout.php><b>LOGOUT</b></a></center>";
			 require_once ('halaman_home.php');
			//header("Location: halaman_home.php");
		}
		else{
			echo '<div style="top: 100px; width: 400px;" class="container alert alert-danger" role="alert"> Username dan Password Salah!</div>';
			include 'form_login.php';
		}

		mysqli_close($con);
	 ?>
	 
</body>
</html>