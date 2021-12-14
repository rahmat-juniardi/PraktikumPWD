<?php
	$host= 'localhost';
	$name= 'db_akademik';
	$username = 'root';
	$password = '';

	$con = mysqli_connect($host, $username, $password, $name);

	$id = $_GET['user_data'];

	$result = mysqli_query($con, "DELETE FROM penjualan WHERE nama_kucing='$id'");

	
?>