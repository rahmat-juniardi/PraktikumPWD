<?php
	include_once("koneksi.php");

	$id = $_GET['id_user'];
	$result = mysqli_query($con, "DELETE FROM users where id_user='$id'");

	header('location:tampil_user.php');
?>