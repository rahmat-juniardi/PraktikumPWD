<?php

	$host= 'localhost';
	$name= 'db_akademik';
	$username = 'root';
	$password = '';

	$con = mysqli_connect($host, $username, $password, $name);

	if (!$con) {
		echo "Error". mysqli_connect_error();
		exit();
	}
?>