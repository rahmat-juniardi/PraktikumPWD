
<?php 
	
	$host= 'localhost';
	$name= 'db_penjualantreatandtail';
	$username = 'root';
	$password = '';

	$con = mysqli_connect($host, $username, $password, $name);

	if (!$con) {
		echo "Error". mysqli_connect_error();
		exit();
	}

 ?>