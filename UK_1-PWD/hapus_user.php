<?php
	include_once("koneksi.php");

	$id = $_GET['id'];

	$result = mysqli_query($con, "DELETE FROM users WHERE id_user='$id'");

	header('location:tampil_user.php');
?>